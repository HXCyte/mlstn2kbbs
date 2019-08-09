<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cash Register Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <script src="https://kit.fontawesome.com/d31c89c165.js"></script>
    <link rel="stylesheet" href="Assets/css/main.css">

</head>
<body>

<!-- ### NAVIGATION BAR ### -->
<nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-between" style="background-color: #FCCC12; padding:0.2rem 1.5rem">
    <a class="navbar-brand" href="#"><img src="Assets/logo.png" style="width:70px"></a>
    <div class="btn-group">
        <button type="button" class="btn btn-secondary dropdown-toggle font-weight-bold dropdown-account" style="background-color:rgb(252, 143, 18)" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">
        Akun kasir
        </button>
        <div class="dropdown-menu dropdown-menu-right">
            <button class="dropdown-item" type="button" href="#">Profile</button>
            <div class="dropdown-divider"></div>
            <button class="dropdown-item" type="button" href="#">Sign Out</button>
        </div>
    </div>
</nav>

<!-- ### CONTENT ### -->
<div class="container" style="max-width: 100%; margin:0%">
    <div class="row">
        <div class="col-lg-5" style="background-color: #EDEDED; padding:0%">
            <div class="border5">
                    <!-- $$$ MENU $$$ -->
                <div class="tab">
                    <div class="col-lg-12 d-flex justify-content-around">
                        <button type="button" class="btn btn-nav tablinks" onclick="myFunction(event,'ala carte')"> ALA CARTE</button>
                        <button type="button" class="btn btn-nav tablinks" onclick="myFunction(event,'combo')"> COMBO</button>
                        <button type="button" class="btn btn-nav tablinks" onclick="myFunction(event,'snack')"> SNACK</button>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-around" style="padding: 0 7rem; margin: 1rem 0">
                        <button type="button" class="btn btn-nav tablinks" onclick="myFunction(event,'drinks')"> DRINKS</button>
                        <button type="button" class="btn btn-nav tablinks" onclick="myFunction(event,'dessert')"> DESSERT</button>
                    </div>
                </div>
                <hr/>

                <div id="ala carte" class="tabcontent">
                    <div class="col-lg-12 d-flex justify-content-around">
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">CLASSIC KEBAB</div>
                        </div>
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">FULLBEEF KEBAB</div>
                        </div>
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">VEGETABLE KEBAB</div>
                        </div>
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">SMOKE BEEF KEBAB</div>
                        </div>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-around">
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">BARBEQUE KEBAB</div>
                        </div>
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">BLACKPEPPER KEBAB</div>
                        </div>
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">CHEESE KEBAB</div>
                        </div>
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">SUPREME KEBAB</div>
                        </div>
                    </div>
                </div>

                <div id="combo" class="tabcontent">
                    <div class="col-lg-12 d-flex justify-content-around">
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">COMBO CLASSIC</div>
                        </div>
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">COMBO FULLBEEF</div>
                        </div>
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">COMBO VEGETABLE</div>
                        </div>
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">COMBO SMOKE BEEF</div>
                        </div>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-around">
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">COMBO BARBEQUE</div>
                        </div>
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">COMBO BLACKPEPPER</div>
                        </div>
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">COMBO CHEESE</div>
                        </div>
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">COMBO SUPREME</div>
                        </div>
                    </div>
                </div>

                <div id="snack" class="tabcontent">
                    <div class="col-lg-12 d-flex justify-content-around">
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">CIRENG</div>
                        </div>
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">TELOR GULUNG</div>
                        </div>
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">MUSHROOM</div>
                        </div>
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">INDOMIE</div>
                        </div>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-around">
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">GRILLED ONION</div>
                        </div>
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">NASJEP</div>
                        </div>
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">BACON</div>
                        </div>
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">PANCAKE</div>
                        </div>
                    </div>
                </div>

                <div id="drinks" class="tabcontent">
                    <div class="col-lg-12 d-flex justify-content-around">
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">ICE TEA</div>
                        </div>
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">LEMON TEA</div>
                        </div>
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">LYCHEA TEA</div>
                        </div>
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">MANGO TEA</div>
                        </div>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-around">
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">COCA COLA</div>
                        </div>
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">MINERAL WATER</div>
                        </div>
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">GREEN TEA</div>
                        </div>
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">COFFEE</div>
                        </div>
                    </div>
                </div>

                <div id="dessert" class="tabcontent">
                    <div class="col-lg-12 d-flex justify-content-around">
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">ICE CREAM</div>
                        </div>
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">BANANA SPLIT</div>
                        </div>
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">BROWNIE</div>
                        </div>
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">COOKIE</div>
                        </div>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-around">
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">PUDDING</div>
                        </div>
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">DOUGHNUT</div>
                        </div>
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">JELL-O</div>
                        </div>
                        <div class="card-container">
                            <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                            <div class="card-combo">PIE</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- $$$ VARIAN, TOPPING, KEPEDASAN $$$ -->
        <div class="col-lg-2 text-center" style="background-color:#EDEDED; padding:0%">
            <div class="border5">
                <b>VARIAN</b>
                    <button type="button" class="btn btn-var">BIG</button>
                    <button type="button" class="btn btn-var">SMALL</button>       
                <hr/>
                <b>TOPPING</b>
                    <button type="button" class="btn btn-topping">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Dropdown Form<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li> <div class="checkbox">
                                    <label><input type="checkbox">EGG</label>
                            </div> </li>
                            <li>
                            <li> <div class="checkbox">
                                    <label><input type="checkbox">VEGGIES</label>
                            </div> </li>
                            <li>
                            <li> <div class="checkbox">
                                    <label><input type="checkbox">MUSHROOM</label>
                            </div> </li>
                            <li>
                            <li> <div class="checkbox">
                                    <label><input type="checkbox">EXTRA MEAT</label>
                            </div> </li>
                            <li>
                            <li> <div class="checkbox">
                                    <label><input type="checkbox">BBQ SCE</label>
                            </div> </li>
                            <li>
                            <li> <div class="checkbox">
                                    <label><input type="checkbox">BLKPPR SCE</label>
                            </div> </li>
                            <li>
                            <li> <div class="checkbox">
                                    <label><input type="checkbox">CHEESE</label>
                            </div> </li>
                            <li>
                            <li> <div class="checkbox">
                                    <label><input type="checkbox">SMK BEEF</label>
                            </div> </li>
                            <li>
                            <li> <div class="checkbox">
                                    <label><input type="checkbox">CHEESE MAYO</label>
                            </div> </li>
                            <li>
                            <li> <div class="checkbox">
                                    <label><input type="checkbox">GRL ONION</label>
                            </div> </li>
                            <li>
                        </ul>
                    </button>
                <hr/>
                <b>KEPEDASAN</b>
                <button type="button" class="btn btn-pedas">NOT SPICY</button>
                <button type="button" class="btn btn-pedas">MEDIUM SPICY</button>
                <button type="button" class="btn btn-pedas">SPICY</button>
            </div>
        </div> 
        <div class="col-lg-5" style="background-color:#EDEDED; padding:0%">
            <div class="border5">
                <button type="button" class="btn btn-success" style= "padding: 5px; margin: 10px 15px 40px 10px; width: 50px">+</button> 
                <b style="margin-left: 75px; font-size: 18px;">ORDER</b>
                <button type="button" class="btn btn-danger" style= "padding: 5px; margin: 10px 15px 40px 90px; width: 50px">-</button> 
            </div>
        </div>
               
        <div class="col-4" style="background-color: #FFFFFF; margin: 1rem; padding:1rem">
        <button type="button" class="btn btn-success" style= "padding: 0.4rem; margin: 0.8rem 1.2rem 3rem 10px; width: 50px">+</button> 
        <b style="margin-left: 75px; font-size: 18px;">ORDER</b>
        <button type="button" class="btn btn-danger" style= "padding: 0.4rem; margin: 0.8rem 1.2rem 3rem 90px; width: 50px">-</button> 
    </div>
</div>    

<script>
function myFunction(evt, namamenu) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(namamenu).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
</body>
</html>
