<?php

namespace tester\controllers;

use common\models\BankAcount;
use common\models\City;
use common\models\Interest;
use common\models\Language;
use common\models\Media;
use common\models\Social;
use common\models\Sport;
use common\models\State;
use tester\models\Tester;
use tester\models\TesterInterest;
use tester\models\TesterJobAndEdu;
use tester\models\TesterLanguage;
use tester\models\TesterMediaForm;
use tester\models\TesterMediaFormSocial;
use tester\models\TesterSport;
use tester\models\UploadTesterAvatar;

use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\web\User;

class ProfileController extends Controller
{
//    public $enableCsrfValidation = false;
    public $layout = "panel";

    public function actionIndex()
    {
        if (!Yii::$app->user->can('canBeTester')) {
            return $this->redirect(Yii::$app->urlManagerFrontend->createUrl(['login']));
        }
        $user = \common\models\User::find()->where(['id' => Yii::$app->user->id])->andWhere(['status' => \common\models\User::STATUS_ACTIVE])->one();
        $testerModel = $this->getTester();
        $testerBankAcount = $this->getTesterBankAcount();
        $testerJobEdu = $this->getTesterJobEdu();
        $testerMediaForm = $this->getTesterMediaForm();
        $languages = Language::find()->all();
        $langList = "";
        foreach ($languages as $item) {
            $langList .= "<option  value='" . $item->id . "'> $item->name_fa ($item->name_orgin) </option>";
        }
        $rateList = '';
        for ($i = 1; $i < 11; $i++) {
            $rateList .= "<option value='" . $i . "'> $i </option>";
        }

        if (!$testerModel) {
            Yii::$app->session->setFlash('success', 'باید به عنوان تستر وارد شوید');
            return $this->redirect(Yii::$app->urlManagerFrontend->createUrl(['site/login']));
        }
        if (!$testerJobEdu) {
            $testerJobEdu = new TesterJobAndEdu();
        }
        if (!$testerMediaForm) {
            $testerMediaForm = new TesterMediaForm();
        }
        if (!$testerBankAcount) {
            $testerBankAcount = new BankAcount();
        }
        // tester model config
        $testerModel->user_id = Yii::$app->user->id;
        if ($testerModel->load(Yii::$app->request->post())) {
            if ($testerModel->save()) {
                Yii::$app->session->setFlash('success', 'اطلاعات  به روز رسانی شد');
            }
        }
        //state and city
        $stateList = [];
        $cityList = [];
        $stateSelected = 0;
        $citySelected = 0;
        $states = State::find()->all();
        foreach ($states as $state) {
            $stateList[$state->id] = $state->name;
        }
        if ($testerModel->city_id !== Null && $testerModel->city_id != 0) {
            $citySelected = $testerModel->city_id;
            $stateSelected = $testerModel->city->state->id;
            $cities = City::find()->where(['state_id' => $stateSelected])->all();
            foreach ($cities as $city) {
                $cityList[$city->id] = $city->name;
            }
        }
        // tester bank acount model config
        $testerBankAcount->user_id = Yii::$app->user->id;
        if ($testerBankAcount->load(Yii::$app->request->post()) && $testerBankAcount->save()) {
            Yii::$app->session->setFlash('success', 'اطلاعات  به روز رسانی شد');
        }
        // tester job edu model config
        $testerJobEdu->user_id = Yii::$app->user->id;
        $testerJobEdu->load(Yii::$app->request->post());
        if ($testerJobEdu->load(Yii::$app->request->post()) && $testerJobEdu->save()) {
            Yii::$app->session->setFlash('success', 'اطلاعات کاری و تحصیلی  به روز رسانی شد');
        }
        // tester interest model
        $interestModels = Interest::find()->all();
        $interestList = [];
        $selectedInterest = [];

        if (Yii::$app->request->post('interest') !== null) {
            TesterInterest::deleteAll(['user_id' => Yii::$app->user->id]);
            $userInterests = Yii::$app->request->post('interest');
            foreach ($userInterests as $item) {

                $testerInterestModel = new TesterInterest();
                $testerInterestModel->user_id = Yii::$app->user->id;
                $testerInterestModel->interest_id = $item;
                $selectedInterest[] = $item;
                $testerInterestModel->save();

            }
        } else {
            $selectedInterest1 = TesterInterest::find()->select('interest_id')->where(['user_id' => Yii::$app->user->id])->asArray()->all();
            foreach ($selectedInterest1 as $item) {
                $selectedInterest[] = $item['interest_id'];
            }
        }
        foreach ($interestModels as $item) {
            $interestList[$item->id] = $item->name;
        }
        // sport interest model
        $sportModels = Sport::find()->all();
        $sportList = [];
        $selectedSport = [];

        if (Yii::$app->request->post('sport') !== null) {
            TesterSport::deleteAll(['user_id' => Yii::$app->user->id]);
            $userSport = Yii::$app->request->post('sport');
            foreach ($userSport as $item) {

                $testerSporttModel = new TesterSport();
                $testerSporttModel->user_id = Yii::$app->user->id;
                $testerSporttModel->sport_id = $item;
                $selectedSport[] = $item;
                $testerSporttModel->save();

            }
        } else {
            $selectedSport1 = TesterSport::find()->select('sport_id')->where(['user_id' => Yii::$app->user->id])->asArray()->all();
            foreach ($selectedSport1 as $item) {
                $selectedSport[] = $item['sport_id'];
            }
        }
        foreach ($sportModels as $item) {
            $sportList[$item->id] = $item->name;
        }
        //---------------------
        if ($testerJobEdu->load(Yii::$app->request->post()) && $testerJobEdu->save()) {
            Yii::$app->session->setFlash('success', 'اطلاعات کاری و تحصیلی  به روز رسانی شد');
        }
        if (Yii::$app->request->post('lang') !== null) {
            $lang = Yii::$app->request->post('lang');
            foreach ($lang as $item) {
                if ($item['name'] != 0) {
                    $testerLangModel = new TesterLanguage();
                    $testerLangModel->tester_id = Yii::$app->user->id;
                    $testerLangModel->language_id = $item['name'];
                    $testerLangModel->read_rate = $item['read'];
                    $testerLangModel->write_rate = $item['write'];
                    $testerLangModel->speak_rate = $item['speak'];
                    $testerLangModel->save();
                }
            }
        }
        //tester media form model
        $testerMediaForm->user_id = Yii::$app->user->id;
        $selectedSocial = [];
        $socialList = [];
        $social = Social::find()->all();
        if ($testerMediaForm->load(Yii::$app->request->post()) && $testerMediaForm->save()) {
            TesterMediaFormSocial::deleteAll(['form_id' => $testerMediaForm->id]);

            $selectedSocial1 = Yii::$app->request->post($testerMediaForm->formName());
            if (isset($selectedSocial1['social'])) {
                foreach ($selectedSocial1['social'] as $item) {
                    $selectedSocial[] = $item;
                }
            }
            Yii::$app->session->setFlash('success', 'اطلاعات فرم رسانه به روز رسانی شد');
        } else {
            $selectedSocial1 = TesterMediaFormSocial::find()->select('social_id')->where(['form_id' => $testerMediaForm->id])->asArray()->all();
            foreach ($selectedSocial1 as $item) {
                $selectedSocial[] = $item['social_id'];
            }
        }

        foreach ($social as $item) {
            $socialList [$item->id] = $item->name;
        }
        // avatar upload model
        $modelUploadTesterAvatar = new UploadTesterAvatar();
//print_r($_POST);die;
        if (Yii::$app->request->post('UploadTesterAvatar')) {

            $modelUploadTesterAvatar->imageFile = UploadedFile::getInstance($modelUploadTesterAvatar, 'imageFile');
            $url = $modelUploadTesterAvatar->upload();
            if ($url) {
                $mediaModel = new Media();
                $mediaModel->url = $url;
                $mediaModel->status = Media::STATUS_ACTIVE;
                if ($mediaModel->save()) {
                    $testerModel->avatar_id = $mediaModel->id;
                    $testerModel->save(false);
                }
            }
        }

        return $this->render('index', [
            'testerModel' => $testerModel,
            'testerJobEdu' => $testerJobEdu,
            'testerMediaForm' => $testerMediaForm,
            'langList' => $langList,
            'rateList' => $rateList,
            'interestList' => $interestList,
            'selectedInterest' => $selectedInterest,
            'sportList' => $sportList,
            'selectedSport' => $selectedSport,
            'socialList' => $socialList,
            'selectedSocial' => $selectedSocial,
            'testerBankAcount' => $testerBankAcount,
            'modelUploadTesterAvatar' => $modelUploadTesterAvatar,
            'stateList' => $stateList,
            'cityList' => $cityList,
            'citySelected' => $citySelected,
            'stateSelected' => $stateSelected,
        ]);
    }

    private function getTester()
    {
        return Tester::findOne(['user_id' => Yii::$app->user->id]);
    }

    private function getTesterMediaForm()
    {
        return TesterMediaForm::findOne(['user_id' => Yii::$app->user->id]);
    }

    private function getTesterJobEdu()
    {
        return TesterJobAndEdu::findOne(['user_id' => Yii::$app->user->id]);
    }

    private function getTesterBankAcount()
    {
        return BankAcount::findOne(['user_id' => Yii::$app->user->id]);
    }

    public function actionState($id)
    {
        if (Yii::$app->request->isAjax) {
            $raw = City::find()
                ->where(['state_id' => $id])
                ->all();
            $results = [];

            foreach ($raw as $item) {
                $results[$item['id']] = $item['name'];
            }
            return json_encode($results);
        }
        return false;
    }
}
