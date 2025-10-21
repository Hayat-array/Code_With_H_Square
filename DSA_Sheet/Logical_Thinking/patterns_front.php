<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Must do Pattern Problems before starting DSA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        svg{
            cursor: pointer;
        }
    .square {
      width: 15px;
      height: 15px;
      border: 3px solid rgb(15, 20, 23);
      background-color: transparent;
      border-radius: 2px;
      transition: background-color 0.3s;
      cursor: pointer;
    }

    .square.filled {
      background-color:rgb(8, 22, 31);
    }
    </style>
</head>
<body>
<body class="bg-light py-4">
<?php include("../../header.php"); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 p-3 border-end">
                <b>Sabbir</b>
            </div>
            <div class="col-8 f">
                <div>
                    <h1><strong>Must do Pattern Problems before starting DSA</strong></h1>
                    <p class="mb-3">This article contains all the important pattern problems that you must solve before starting DSA. This is a part of the <span style="color:red"><u>Code With H-Square's A2Z DSA Course/Sheet</u></span>.</p>
                </div>
                <div>
                    <p>
                        <svg style="margin-bottom: 5px;" width="15" height="15" viewBox="0 0 150 150" xmlns="http://www.w3.org/2000/svg">
                            <polygon points="50,90 10,20 90,20" fill="black" stroke="black" stroke-width="2" />
                        </svg>
                        <strong>Patterns: </strong>Learn Important Pattern Problems
                    </p>
                </div>
                <div class="row">
                    <div class="col-2 bg-light text-center">
                        <div style="margin-bottom: 140px; display: flex; align-items: center; gap: 8px;">
                            <h5>1</h5>
                            <div class="square" onclick="toggleFill(this)"></div>
                            <!-- <svg id="square" width="15" height="15" xmlns="http://www.w3.org/2000/svg">
                                <rect width="15" height="15" fill="none" stroke="black" stroke-width="4" />
                            </svg> -->
                        </div>
                        <div style="margin-bottom: 130px; display: flex; align-items: center; gap: 8px;">
                            <h5>2</h5>
                            <!-- <svg id="square" width="15" height="15" xmlns="http://www.w3.org/2000/svg">
                                <rect width="15" height="15" fill="none" stroke="black" stroke-width="4" />
                            </svg> -->
                            <div class="square" onclick="toggleFill(this)"></div>
                        </div>
                        <div style="margin-bottom: 135px; display: flex; align-items: center; gap: 8px;">
                            <h5>3</h5>
                            <!-- <svg id="square" width="15" height="15" xmlns="http://www.w3.org/2000/svg">
                                <rect width="15" height="15" fill="none" stroke="black" stroke-width="4" />
                            </svg> -->
                            <div class="square" onclick="toggleFill(this)"></div>
                        </div>
                        <div style="margin-bottom: 130px; display: flex; align-items: center; gap: 8px;">
                            <h5>4</h5>
                            <!-- <svg id="square" width="15" height="15" xmlns="http://www.w3.org/2000/svg">
                                <rect width="15" height="15" fill="none" stroke="black" stroke-width="4" />
                            </svg> -->
                            <div class="square" onclick="toggleFill(this)"></div>
                        </div>
                        <div style="margin-bottom: 130px; display: flex; align-items: center; gap: 8px;">
                            <h5>5</h5>
                            <!-- <svg id="square" width="15" height="15" xmlns="http://www.w3.org/2000/svg">
                                <rect width="15" height="15" fill="none" stroke="black" stroke-width="4" />
                            </svg> -->
                            <div class="square" onclick="toggleFill(this)"></div>
                        </div>
                        <div style="margin-bottom: 130px; display: flex; align-items: center; gap: 8px;">
                            <h5>6</h5>
                            <!-- <svg id="square" width="15" height="15" xmlns="http://www.w3.org/2000/svg">
                                <rect width="15" height="15" fill="none" stroke="black" stroke-width="4" />
                            </svg> -->
                            <div class="square" onclick="toggleFill(this)"></div>
                        </div>
                        <div style="margin-bottom: 140px; display: flex; align-items: center; gap: 8px;">
                            <h5>7</h5>
                            <!-- <svg id="square" width="15" height="15" xmlns="http://www.w3.org/2000/svg">
                                <rect width="15" height="15" fill="none" stroke="black" stroke-width="4" />
                            </svg> -->
                            <div class="square" onclick="toggleFill(this)"></div>
                        </div>
                        <div style="margin-bottom: 140px; display: flex; align-items: center; gap: 8px;">
                            <h5>8</h5>
                            <!-- <svg id="square" width="15" height="15" xmlns="http://www.w3.org/2000/svg">
                                <rect width="15" height="15" fill="none" stroke="black" stroke-width="4" />
                            </svg> -->
                            <div class="square" onclick="toggleFill(this)"></div>
                        </div>
                        <div style="margin-bottom: 130px; display: flex; align-items: center; gap: 8px;">
                            <h5>9</h5>
                            <!-- <svg id="square" width="15" height="15" xmlns="http://www.w3.org/2000/svg">
                                <rect width="15" height="15" fill="none" stroke="black" stroke-width="4" />
                            </svg> -->
                            <div class="square" onclick="toggleFill(this)"></div>
                        </div>
                        <div style="margin-bottom: 130px; display: flex; align-items: center; gap: 8px;">
                            <h5>10</h5>
                            <!-- <svg id="square" width="15" height="15" xmlns="http://www.w3.org/2000/svg">
                                <rect width="15" height="15" fill="none" stroke="black" stroke-width="4" />
                            </svg> -->
                            <div class="square" onclick="toggleFill(this)"></div>
                        </div>
                        <div style="margin-bottom: 130px; display: flex; align-items: center; gap: 8px;">
                            <h5>11</h5>
                            <!-- <svg id="square" width="15" height="15" xmlns="http://www.w3.org/2000/svg">
                                <rect width="15" height="15" fill="none" stroke="black" stroke-width="4" />
                            </svg> -->
                            <div class="square" onclick="toggleFill(this)"></div>
                        </div>
                        <div style="margin-bottom: 130px; display: flex; align-items: center; gap: 8px;">
                            <h5>12</h5>
                            <!-- <svg id="square" width="15" height="15" xmlns="http://www.w3.org/2000/svg">
                                <rect width="15" height="15" fill="none" stroke="black" stroke-width="4" />
                            </svg> -->
                            <div class="square" onclick="toggleFill(this)"></div>
                        </div>
                        <div style="margin-bottom: 130px; display: flex; align-items: center; gap: 8px;">
                            <h5>13</h5>
                            <!-- <svg id="square" width="15" height="15" xmlns="http://www.w3.org/2000/svg">
                                <rect width="15" height="15" fill="none" stroke="black" stroke-width="4" />
                            </svg> -->
                            <div class="square" onclick="toggleFill(this)"></div>
                        </div>
                        <div style="margin-bottom: 130px; display: flex; align-items: center; gap: 8px;">
                            <h5>14</h5>
                            <!-- <svg id="square" width="15" height="15" xmlns="http://www.w3.org/2000/svg">
                                <rect width="15" height="15" fill="none" stroke="black" stroke-width="4" />
                            </svg> -->
                            <div class="square" onclick="toggleFill(this)"></div>
                        </div>
                        <div style="margin-bottom: 130px; display: flex; align-items: center; gap: 8px;">
                            <h5>15</h5>
                            <!-- <svg id="square" width="15" height="15" xmlns="http://www.w3.org/2000/svg">
                                <rect width="15" height="15" fill="none" stroke="black" stroke-width="4" />
                            </svg> -->
                            <div class="square" onclick="toggleFill(this)"></div>
                        </div>
                        <div style="margin-bottom: 130px; display: flex; align-items: center; gap: 8px;">
                            <h5>16</h5>
                            <!-- <svg id="square" width="15" height="15" xmlns="http://www.w3.org/2000/svg">
                                <rect width="15" height="15" fill="none" stroke="black" stroke-width="4" />
                            </svg> -->
                            <div class="square" onclick="toggleFill(this)"></div>
                        </div>
                        <div style="margin-bottom: 130px; display: flex; align-items: center; gap: 8px;">
                            <h5>17</h5>
                            <!-- <svg id="square" width="15" height="15" xmlns="http://www.w3.org/2000/svg">
                                <rect width="15" height="15" fill="none" stroke="black" stroke-width="4" />
                            </svg> -->
                            <div class="square" onclick="toggleFill(this)"></div>
                        </div>
                        <div style="margin-bottom: 130px; display: flex; align-items: center; gap: 8px;">
                            <h5>18</h5>
                            <!-- <svg id="square" width="15" height="15" xmlns="http://www.w3.org/2000/svg">
                                <rect width="15" height="15" fill="none" stroke="black" stroke-width="4" />
                            </svg> -->
                            <div class="square" onclick="toggleFill(this)"></div>
                        </div>
                        <div style="margin-bottom: 130px; display: flex; align-items: center; gap: 8px;">
                            <h5>19</h5>
                            <!-- <svg id="square" width="15" height="15" xmlns="http://www.w3.org/2000/svg">
                                <rect width="15" height="15" fill="none" stroke="black" stroke-width="4" />
                            </svg> -->
                            <div class="square" onclick="toggleFill(this)"></div>
                        </div>
                        <div style="margin-bottom: 130px; display: flex; align-items: center; gap: 8px;">
                            <h5>20</h5>
                            <!-- <svg id="square" width="15" height="15" xmlns="http://www.w3.org/2000/svg">
                                <rect width="15" height="15" fill="none" stroke="black" stroke-width="4" />
                            </svg> -->
                            <div class="square" onclick="toggleFill(this)"></div>
                        </div>
                        <div style="margin-bottom: 130px; display: flex; align-items: center; gap: 8px;">
                            <h5>21</h5>
                            <!-- <svg id="square" width="15" height="15" xmlns="http://www.w3.org/2000/svg">
                                <rect width="15" height="15" fill="none" stroke="black" stroke-width="4" />
                            </svg> -->
                            <div class="square" onclick="toggleFill(this)"></div>
                        </div>
                        <div style="margin-bottom: 130px; display: flex; align-items: center; gap: 8px;">
                            <h5>22</h5>
                            <!-- <svg id="square" width="15" height="15" xmlns="http://www.w3.org/2000/svg">
                                <rect width="15" height="15" fill="none" stroke="black" stroke-width="4" />
                            </svg> -->
                            <div class="square" onclick="toggleFill(this)"></div>
                        </div>
                    </div>
                        <div class="col-4  text-white text-center">
                            <div style="margin-bottom:15px;">
                                <img class="aligncenter wp-image-1830" src="https://static.takeuforward.org/wp/uploads/2022/08/P1.png" alt width="150" height="150">
                            </div>
                            <div style="margin-bottom:15px;">
                                <img class="aligncenter wp-image-1830" src="https://static.takeuforward.org/wp/uploads/2022/08/P2.png" alt width="150" height="150">
                            </div>
                            <div style="margin-bottom:15px;">
                                <img class="aligncenter wp-image-1830" src="https://static.takeuforward.org/wp/uploads/2022/08/P3.png" alt width="150" height="150">
                            </div>
                            <div style="margin-bottom:15px;">
                                <img class="aligncenter wp-image-1830" src="https://static.takeuforward.org/wp/uploads/2022/08/P4.png" alt width="150" height="150">
                            </div>
                            <div style="margin-bottom:15px;">
                                <img class="aligncenter wp-image-1830" src="https://static.takeuforward.org/wp/uploads/2022/08/P5.png" alt width="150" height="150">
                            </div>
                            <div style="margin-bottom:15px;">
                                <img class="aligncenter wp-image-1830" src="https://static.takeuforward.org/wp/uploads/2022/08/P6.png" alt width="150" height="150">
                            </div>
                            <div style="margin-bottom:15px;">
                                <img class="aligncenter wp-image-1830" src="https://static.takeuforward.org/wp/uploads/2022/08/P7.png" alt width="150" height="150">                            </div>
                            <div style="margin-bottom:15px;">
                                <img class="aligncenter wp-image-1830" src="https://static.takeuforward.org/wp/uploads/2022/08/P8.png" alt width="150" height="150">
                            </div>
                            <div style="margin-bottom:15px;">
                                <img class="aligncenter wp-image-1830" src="https://static.takeuforward.org/wp/uploads/2022/08/P9.png" alt width="150" height="150">
                            </div>
                            <div style="margin-bottom:15px;">
                                <img class="aligncenter wp-image-1830" src="https://static.takeuforward.org/wp/uploads/2022/08/P10.png" alt width="150" height="150">
                            </div>
                            <div style="margin-bottom:15px;">
                                <img class="aligncenter wp-image-1830" src="https://static.takeuforward.org/wp/uploads/2022/08/P11.png" alt width="150" height="150">
                            </div>
                            <div style="margin-bottom:15px;">
                                <img class="aligncenter wp-image-1830" src="https://static.takeuforward.org/wp/uploads/2022/08/P12.png" alt width="130" height="130">
                            </div>
                            <div style="margin-bottom:15px;">
                                <img class="aligncenter wp-image-1830" src="https://static.takeuforward.org/wp/uploads/2022/08/P13.png" alt width="150" height="150">
                            </div>
                            <div style="margin-bottom:15px;">
                                <img class="aligncenter wp-image-1830" src="https://static.takeuforward.org/wp/uploads/2022/08/P14.png" alt width="140" height="140">
                            </div>
                            <div style="margin-bottom:15px;">
                                <img class="aligncenter wp-image-1830" src="https://static.takeuforward.org/wp/uploads/2022/08/P15.png" alt width="140" height="140">
                            </div>
                            <div style="margin-bottom:15px;">
                                <img class="aligncenter wp-image-1830" src="https://static.takeuforward.org/wp/uploads/2022/08/P16.png" alt width="140" height="140">
                            </div>
                            <div style="margin-bottom:15px;">
                                <img class="aligncenter wp-image-1830" src="https://static.takeuforward.org/wp/uploads/2022/08/P17.png" alt width="140" height="140">
                            </div>
                            <div style="margin-bottom:15px;">
                                <img class="aligncenter wp-image-1830" src="https://static.takeuforward.org/wp/uploads/2022/08/P18.png" alt width="150" height="150">
                            </div>
                            <div style="margin-bottom:15px;">
                                <img class="aligncenter wp-image-1830" src="https://static.takeuforward.org/wp/uploads/2022/08/P19.png" alt width="150" height="150">
                            </div>
                            <div style="margin-bottom:15px;">
                                <img class="aligncenter wp-image-1830" src="https://static.takeuforward.org/wp/uploads/2022/08/P20.png" alt width="150" height="150">
                            </div>
                            <div style="margin-bottom:15px;">
                                <img class="aligncenter wp-image-1830" src="https://static.takeuforward.org/wp/uploads/2023/01/Screenshot-2023-01-02-at-1.54.55-PM-1.jpg" alt width="150" height="150">
                            </div>
                            <div style="margin-bottom:15px;">
                                <img class="aligncenter wp-image-1830" src="https://static.takeuforward.org/wp/uploads/2022/08/P22.png" alt width="130" height="130">
                            </div>
                        </div>
                    <div class="col-4 text-center">
                        <div style="margin-bottom: 150px; margin-top:0px; display: flex; align-items: center; gap: 150px;">
                            <div><a href="./pattern1.php">Link</a></div>
                            <div><a href="./pattern1.php">Link</a></div>
                            <div><a href="./pattern1.php">Link</a></div>
                        </div>
                        <div style="margin-bottom: 150px; margin-top:0px; display: flex; align-items: center; gap: 150px;">
                            <div><a href="./pattern2.php">Link</a></div>
                            <div><a href="./pattern2.php">Link</a></div>
                            <div><a href="./pattern2.php">Link</a></div>
                        </div>
                        <div style="margin-bottom: 150px; margin-top:0px; display: flex; align-items: center; gap: 150px;">
                            <div><a href="./pattern3.php">Link</a></div>
                            <div><a href="./pattern3.php">Link</a></div>
                            <div><a href="./pattern3.php">Link</a></div>
                        </div>
                        <div style="margin-bottom: 125px; margin-top:0px; display: flex; align-items: center; gap: 150px;">
                           <div><a href="./pattern4.php">Link</a></div>
                            <div><a href="./pattern4.php">Link</a></div>
                            <div><a href="./pattern4.php">Link</a></div>
                        </div>
                        <div style="margin-bottom: 150px; margin-top:0px; display: flex; align-items: center; gap: 150px;">
                            <div><a href="./pattern5.php">Link</a></div>
                            <div><a href="./pattern5.php">Link</a></div>
                            <div><a href="./pattern5.php">Link</a></div>
                        </div>
                        <div style="margin-bottom: 132px; margin-top:0px; display: flex; align-items: center; gap: 150px;">
                            <div><a href="./pattern6.php">Link</a></div>
                            <div><a href="./pattern6.php">Link</a></div>
                            <div><a href="./pattern6.php">Link</a></div>
                        </div>
                        <div style="margin-bottom: 150px; margin-top:0px; display: flex; align-items: center; gap: 150px;">
                            <div><a href="./pattern7.php">Link</a></div>
                            <div><a href="./pattern7.php">Link</a></div>
                            <div><a href="./pattern7.php">Link</a></div>
                        </div>
                        <div style="margin-bottom: 150px; margin-top:0px; display: flex; align-items: center; gap: 150px;">
                            <div><a href="./pattern8.php">Link</a></div>
                            <div><a href="./pattern8.php">Link</a></div>
                            <div><a href="./pattern8.php">Link</a></div>
                        </div>
                        <div style="margin-bottom: 123px; margin-top:0px; display: flex; align-items: center; gap: 150px;">
                           <div><a href="./pattern9.php">Link</a></div>
                            <div><a href="./pattern9.php">Link</a></div>
                            <div><a href="./pattern9.php">Link</a></div>
                        </div>
                        <div style="margin-bottom: 150px; margin-top:0px; display: flex; align-items: center; gap: 150px;">
                            <div><a href="./pattern10.php">Link</a></div>
                            <div><a href="./pattern10.php">Link</a></div>
                            <div><a href="./pattern10.php">Link</a></div>
                        </div>
                        <div style="margin-bottom: 120px; margin-top:0px; display: flex; align-items: center; gap: 150px;">
                            <div><a href="./pattern11.php">Link</a></div>
                            <div><a href="./pattern11.php">Link</a></div>
                            <div><a href="./pattern11.php">Link</a></div>
                        </div>
                        <div style="margin-bottom: 122px; margin-top:0px; display: flex; align-items: center; gap: 150px;">
                            <div><a href="./pattern12.php">Link</a></div>
                            <div><a href="./pattern12.php">Link</a></div>
                            <div><a href="./pattern12.php">Link</a></div>
                        </div>
                        <div style="margin-bottom: 150px; margin-top:0px; display: flex; align-items: center; gap: 150px;">
                            <div><a href="./pattern13.php">Link</a></div>
                            <div><a href="./pattern13.php">Link</a></div>
                            <div><a href="./pattern13.php">Link</a></div>
                        </div>
                        <div style="margin-bottom: 125px; margin-top:0px; display: flex; align-items: center; gap: 150px;">
                            <div><a href="./pattern14.php">Link</a></div>
                            <div><a href="./pattern14.php">Link</a></div>
                            <div><a href="./pattern14.php">Link</a></div>
                        </div>
                        <div style="margin-bottom: 125px; margin-top:0px; display: flex; align-items: center; gap: 150px;">
                            <div><a href="./pattern15.php">Link</a></div>
                            <div><a href="./pattern15.php">Link</a></div>
                            <div><a href="./pattern15.php">Link</a></div>
                        </div>
                        <div style="margin-bottom: 150px; margin-top:0px; display: flex; align-items: center; gap: 150px;">
                            <div><a href="./pattern16.php">Link</a></div>
                            <div><a href="./pattern16.php">Link</a></div>
                            <div><a href="./pattern16.php">Link</a></div>
                        </div>
                        <div style="margin-bottom: 115px; margin-top:0px; display: flex; align-items: center; gap: 150px;">
                            <div><a href="./pattern17.php">Link</a></div>
                            <div><a href="./pattern17.php">Link</a></div>
                            <div><a href="./pattern17.php">Link</a></div>
                        </div>
                        <div style="margin-bottom: 150px; margin-top:0px; display: flex; align-items: center; gap: 150px;">
                            <div><a href="./pattern18.php">Link</a></div>
                            <div><a href="./pattern18.php">Link</a></div>
                            <div><a href="./pattern18.php">Link</a></div>
                        </div>
                        <div style="margin-bottom: 150px; margin-top:0px; display: flex; align-items: center; gap: 150px;">
                            <div><a href="./pattern19.php">Link</a></div>
                            <div><a href="./pattern19.php">Link</a></div>
                            <div><a href="./pattern19.php">Link</a></div>
                        </div>
                        <div style="margin-bottom: 140px; margin-top:0px; display: flex; align-items: center; gap: 150px;">
                            <div><a href="./pattern20.php">Link</a></div>
                            <div><a href="./pattern20.php">Link</a></div>
                            <div><a href="./pattern20.php">Link</a></div>
                        </div>
                        <div style="margin-bottom: 130px; margin-top:0px; display: flex; align-items: center; gap: 150px;">
                              <div><a href="./pattern21.php">Link</a></div>
                            <div><a href="./pattern21.php">Link</a></div>
                            <div><a href="./pattern21.php">Link</a></div>
                        </div>
                        <div style="margin-bottom: 150px; margin-top:0px; display: flex; align-items: center; gap: 150px;">
                              <div><a href="./pattern22.php">Link</a></div>
                            <div><a href="./pattern22.php">Link</a></div>
                            <div><a href="./pattern22.php">Link</a></div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
  window.addEventListener('DOMContentLoaded', () => {
    const rect = document.getElementById("rect");
    if (!rect) return; // If not found, stop

    const isFilled = localStorage.getItem("squareFilled") === "true";

    if (isFilled) {
      rect.setAttribute("fill", "black");
    }

    rect.addEventListener("click", () => {
      const isNowFilled = rect.getAttribute("fill") === "black";

      if (isNowFilled) {
        rect.setAttribute("fill", "none");
        localStorage.setItem("squareFilled", "false");
      } else {
        rect.setAttribute("fill", "black");
        localStorage.setItem("squareFilled", "true");
      }
    });
  });
</script>
<script>
    // Toggle the 'filled' class on click
    function toggleFill(element) {
      element.classList.toggle('filled');
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>