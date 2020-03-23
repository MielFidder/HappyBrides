<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <title>Bootstrap 4 Layout</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Raleway:400,800"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="/css/bootstrap.css" />
    <link rel="stylesheet" href="/css/styles.css" />

    <!-- scripts -->
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script type="text/javascript">
      $(document).ready(function(){
         $("#lijst").on("click", ".del", function(){
          var row = $(this).closest("tr")
          row.remove();
        });
      });
      
    </script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>


  </head>

  <body>
    <div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
    <div class="container-fluid">

        <?php
        include "include/carousel.php";
        require "include/NavBar.php";
        ?>

        <!-- Lijst start -->
        <div class="wenslijst">
          <table>
            <thead>
              <tr id="head">
                <th>Item</th>
                <th>Kopen</th>
              </tr>
            </thead>
            <tbody id="lijst">
            <tr>
              <td>item 1</td>
              <td><button class="del"><img src="img/X.png" width="33px"></button></td>
            </tr>
            <tr>
              <td>item 2</td>
              <td><button class="del"><img src="img/X.png" width="33px"></button></td>
            </tr>
            <tr>
              <td>item 3</td>
              <td><button class="del"><img src="img/X.png" width="33px"></button></td>
            </tr>
            <tr>
              <td>item 4</td>
              <td><button class="del"><img src="img/X.png" width="33px"></button></td>
            </tr>
            <tr>
              <td>item 5</td>
              <td><button class="del"><img src="img/X.png" width="33px"></button></td>
            </tr> 
          </tbody>
          </table>    
        </div>
        <!-- Lijst end -->

        <!-- footer start -->
        <div class="footer">
            <footer>
              <p>Made by: Miel Fidder</p>
            </footer>
          </div>
          <!-- footer end -->
      
        </div>
        <!-- continer body end -->
  
        </div>
        <!-- body end -->
  
      <!-- white space links -->
      <div class="col-lg-2"></div>
      </div>
      <!-- row end -->
    </body>
  </html>
