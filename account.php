<!DOCTYPE html>
<html>
<head>
<?php
// include './include/include_head.php';
// include 'navbar.php';
?>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.20/css/uikit.css">
    <link rel="stylesheet" href="./jquery.Thailand.js/dist/jquery.Thailand.min.css">

    <style>
        a, h1, h2, .h2{
            font-family: 'Kanit', sans-serif !important;
            line-height: 1.6em;
        }
        a{
            font-size: 1.4em;
        }
        label{
            font-size: 1.6em;
            display: block;
        }
    </style>

   <!--  <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-33058582-1', 'auto', {
            'name': 'Main'
        });
        ga('Main.send', 'event', 'jquery.Thailand.js', 'GitHub', 'Visit');
    </script> -->

</head>
<body>

    <div class="uk-container uk-padding">

        <!-- DEMO 1 -->
        <h1>Auto Complete ที่อยู่ อย่างที่มันควรเป็น</h1>

        <div id="loader">
            <div uk-spinner></div> รอสักครู่ กำลังโหลดฐานข้อมูล...
        </div>

        <form id="demo1" class="demo" style="display:none;" autocomplete="off" uk-grid >

            <div class="uk-width-1-2@m">
                <label class="h2">ตำบล / แขวง</label>
                <input name="district" class="uk-input uk-width-1-1" type="text">
            </div>

            <div class="uk-width-1-2@m">
				<label class="h2">อำเภอ / เขต</label>
				<input name="amphoe" class="uk-input uk-width-1-1" type="text">
            </div>

            <div class="uk-width-1-2@m">
                <label class="h2">จังหวัด</label>
                <input name="province" class="uk-input uk-width-1-1" type="text">
            </div>

            <div class="uk-width-1-2@m">
                <label class="h2">รหัสไปรษณีย์</label>
                <input name="zipcode" class="uk-input uk-width-1-1" type="text">
            </div>

        </form>
        <!-- END DEMO 1 -->

    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.20/js/uikit.min.js"></script>

    <!-- dependencies for zip mode -->
    <script type="text/javascript" src="./jquery.Thailand.js/dependencies/zip.js/zip.js"></script>
    <!-- / dependencies for zip mode -->

    <script type="text/javascript" src="./jquery.Thailand.js/dependencies/JQL.min.js"></script>
    <script type="text/javascript" src="./jquery.Thailand.js/dependencies/typeahead.bundle.js"></script>

    <script type="text/javascript" src="./jquery.Thailand.js/dist/jquery.Thailand.min.js"></script>

    <script type="text/javascript">
        /******************\
         *     DEMO 1     *
        \******************/
        // demo 1: load database from json. if your server is support gzip. we recommended to use this rather than zip.
        // for more info check README.md

        $.Thailand({
            database: './jquery.Thailand.js/database/db.json',

            $district: $('#demo1 [name="district"]'),
            $amphoe: $('#demo1 [name="amphoe"]'),
            $province: $('#demo1 [name="province"]'),
            $zipcode: $('#demo1 [name="zipcode"]'),

            onDataFill: function(data){
                console.info('Data Filled', data);
            },

            onLoad: function(){
                console.info('Autocomplete is ready!');
                $('#loader, .demo').toggle();
            }
        });

        // watch on change

        $('#demo1 [name="district"]').change(function(){
            console.log('ตำบล', this.value);
        });
        $('#demo1 [name="amphoe"]').change(function(){
            console.log('อำเภอ', this.value);
        });
        $('#demo1 [name="province"]').change(function(){
            console.log('จังหวัด', this.value);
        });
        $('#demo1 [name="zipcode"]').change(function(){
            console.log('รหัสไปรษณีย์', this.value);
        });

    </script>

</body>
</html>