<?php
/* @var $this yii\web\View */
?>

<h1>گزارشات</h1>
<hr>
<div class="row">

    <div class="col-md-12">
        <!-- BEGIN BORDERED TABLE PORTLET-->
        <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-delicious font-dark"></i>
                    <span class="caption-subject font-dark bold uppercase">پروژه مثال1</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-scrollable">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th> #</th>
                            <th> پلتفرم</th>
                            <th> موضوع</th>
                            <th>تعداد آزمونگران</th>
                            <th> تعداد ایرادات گزارش شده</th>
                            <th> وضعیت </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td > 1</td>
                            <td><i class="fa fa-android"></i></td>
                            <td> تست عملکرد کلی </td>
                            <td> 25</td>
                            <td> 45</td>
                            <td>
                                <span class="label label-sm label-success"> تکمیل شده </span>
                                &nbsp;
                                <a href="report/detail?id=450">  <span class="label label-sm label-primary"> مشاهده جزئیات </span></a>
                            </td>
                        </tr>
                        <tr>
                            <td > 2</td>
                            <td><i class="fa fa-apple"></i></td>
                            <td > تست عملکرد کلی</td>
                            <td> 25</td>
                            <td> 37</td>
                            <td>
                                <span class="label label-sm label-success"> تکمیل شده </span>
                                &nbsp;
                                <a href="report/detail?id=451">  <span class="label label-sm label-primary"> مشاهده جزئیات </span></a>
                            </td>
                        </tr>
                        <tr>
                            <td> 3</td>
                            <td><i class="fa fa-chrome"></i></td>
                            <td> تست عملکرد کلی</td>
                            <td> 40</td>
                            <td> 51</td>
                            <td>
                                <span class="label label-sm label-success"> تکمیل شده </span>
                                &nbsp;
                                <a href="report/detail?id=452">  <span class="label label-sm label-primary"> مشاهده جزئیات </span></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END BORDERED TABLE PORTLET-->
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class=" icon-layers font-green"></i>
                    <span class="caption-subject font-green bold uppercase">نمودار جنسیت آزمونگران</span>
                </div>
            </div>
            <div class="portlet-body">
                <div id="gchart_pie_1" ></div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class=" icon-layers font-green"></i>
                    <span class="caption-subject font-green bold uppercase">پلتفرم</span>
                </div>
            </div>
            <div class="portlet-body">
                <div id="gchart_pie_2"></div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class=" icon-layers font-green"></i>
                    <span class="caption-subject font-green bold uppercase">اهمیت ایرادها</span>
                </div>
            </div>
            <div class="portlet-body">
                <div id="gchart_pie_3" ></div>
            </div>
        </div>
    </div>
</div>
<div class="row">

    <div class="col-md-12">
        <!-- BEGIN BORDERED TABLE PORTLET-->
        <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-delicious font-dark"></i>
                    <span class="caption-subject font-dark bold uppercase">پروژه مثال1</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-scrollable">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th> #</th>
                            <th> پلتفرم</th>
                            <th> موضوع</th>
                            <th>تعداد آزمونگران</th>
                            <th> تعداد ایرادات گزارش شده</th>
                            <th> وضعیت </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td > 1</td>
                            <td><i class="fa fa-android"></i></td>
                            <td> تست محدود ثبت نام کاربر </td>
                            <td> 20</td>
                            <td> -</td>
                            <td >
                                <span class="label label-sm label-default"> در انتظار بررسی </span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END BORDERED TABLE PORTLET-->
    </div>
</div>