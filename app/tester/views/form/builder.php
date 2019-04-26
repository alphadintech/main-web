<style>
    .form-wrap.form-builder .frmb-control li {
        text-align: right;
        display: block;
    }
</style>
<div id="fb-editor"></div>
<?php
$script = <<< JS
    $(document.getElementById('fb-editor')).formBuilder({
    defaultFields: [{
        className: "form-control",
        label: "First Name",
        placeholder: "Enter your first name",
        name: "first-name",
        required: true,
        type: "text"
      }, {
        className: "form-control",
        label: "Select",
        name: "select-1454862249997",
        type: "select",
        multiple: "true",
        values: [{
          label: 'Custom Option 1',
          value: 'test-value'
        }, {
          label: 'Custom Option 2',
          value: 'test-value-2'
        }]
      }, {
        label: "Radio",
        name: "select-1454862249997",
        type: "radio-group"
      }],
      i18n: {
        locale: 'fa-IR'
      }
    });
JS;
$this->registerJs($script);
?>