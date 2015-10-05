<html>
<head>
    <script type="text/javascript" src="js/jquery-1.11.3.js"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<?php include 'inc/header.inc.php';?>
<br>
<br>
<br>
<br>
    <style type="text/css">

        .box{

            padding: 20px;

            display: none;

            margin-top: 20px;

            border: 1px solid #000;

        }

        .red{ background: #ff0000; }

        .green{ background: #00ff00; }

        .blue{ background: #0000ff; }

    </style>

    <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>

    <script type="text/javascript">

    $(document).ready(function(){

        $("select").change(function(){

            $(this).find("option:selected").each(function(){

                if($(this).attr("value")=="red"){

                    $(".box").not(".red").hide();

                    $(".red").show();

                }

                else if($(this).attr("value")=="green"){

                    $(".box").not(".green").hide();

                    $(".green").show();

                }

                else if($(this).attr("value")=="blue"){

                    $(".box").not(".blue").hide();

                    $(".blue").show();

                }

                else{

                    $(".box").hide();

                }

            });

        }).change();

    });

    </script>

    </head>

    <body>

        <div>

            <select>

                <option>Choose Color</option>

                <option value="red">Red</option>

                <option value="green">Green</option>

                <option value="blue">Blue</option>

            </select>

        </div>

        <div class="red box">You have selected <strong>red option</strong> so i am here</div>

        <div class="green box">You have selected <strong>green option</strong> so i am here</div>

        <div class="blue box">You have selected <strong>blue option</strong> so i am here</div>

    </body>

    </html>


