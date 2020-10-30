<?php
class genreView {

function render($gArray, $rArray)
{
    ?>
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>Movie Review</title>
      </head>
      <body>
        <h1><a href ="../views/landingView.php">Movie Reviews</a>
            "/"
            <a href ="../views/genreView.php"> what goes in here?   </a>
        </h1>
        <br />

        <table class="left">
          <tr>
            <th>Genres</th>
          </tr>
          <?php foreach($gArray as $genres) {?>
            <tr>
              <td><a href="../views/landingView.php?&genres=<?=urldecode($genres)?>"> &#8226; <?=$genres ?></a><td>
            </tr>
        <?php  } ?>
        </table>
        
        <table>
          <tr>
            <th>Reviews</th>
          </tr>
          <tr>
            <td><a href='../views/reviewForm.html'>&#8226; [Add Review]</a></td>
          </tr>
          <tr>
            <td>&#8226; to be added</td>
          </tr>
        </table>
      </body>
    </html>

    <style>
      table, td, th {height: 25px; width: 250px; text-align: center;}
      th {font-size: 200%;}
      table.left {float: left}
      table.right {float: right}
    </style>

<?php
  }
}
