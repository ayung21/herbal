<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Daftar Toko</title>
  <link href="<?= base_url('assets/bootstrap/css/v4.3.1/bootstrap.min.css'); ?>" rel="stylesheet" />
  <link href="<?= base_url('assets/dist/css/font-awesome.min.css'); ?>" rel="stylesheet" />
  <link rel="shortcut icon" href="#">
  <style>
    body {
      color: #000;
      overflow-x: hidden;
      height: 100%;
      background-color: #b0bec5;
      background-repeat: no-repeat;
    }

    .card0 {
      box-shadow: 0px 4px 8px 0px #757575;
      border-radius: 0px;
    }

    .card2 {
      margin: 0px 40px;
    }

    .logo {
      width: 200px;
      height: 100px;
      margin-top: 20px;
      margin-left: 35px;
    }

    .image {
      width: 360px;
      height: 280px;
    }

    .border-line {
      border-right: 1px solid #eeeeee;
    }

    .facebook {
      background-color: #3b5998;
      color: #fff;
      font-size: 18px;
      padding-top: 5px;
      border-radius: 50%;
      width: 35px;
      height: 35px;
      cursor: pointer;
    }

    .twitter {
      background-color: #1da1f2;
      color: #fff;
      font-size: 18px;
      padding-top: 5px;
      border-radius: 50%;
      width: 35px;
      height: 35px;
      cursor: pointer;
    }

    .linkedin {
      background-color: #2867b2;
      color: #fff;
      font-size: 18px;
      padding-top: 5px;
      border-radius: 50%;
      width: 35px;
      height: 35px;
      cursor: pointer;
    }

    .line {
      height: 1px;
      width: 40%;
      background-color: #e0e0e0;
      margin-top: 10px;
    }

    .or {
      width: 20%;
      font-weight: bold;
    }

    .text-sm {
      font-size: 14px !important;
    }

    ::placeholder {
      color: #bdbdbd;
      opacity: 1;
      font-weight: 300;
    }

    :-ms-input-placeholder {
      color: #bdbdbd;
      font-weight: 300;
    }

    ::-ms-input-placeholder {
      color: #bdbdbd;
      font-weight: 300;
    }

    input,
    textarea {
      padding: 10px 12px 10px 12px;
      border: 1px solid lightgrey;
      border-radius: 2px;
      margin-bottom: 5px;
      margin-top: 2px;
      width: 100%;
      box-sizing: border-box;
      color: #2c3e50;
      font-size: 14px;
      letter-spacing: 1px;
    }

    input:focus,
    textarea:focus {
      -moz-box-shadow: none !important;
      -webkit-box-shadow: none !important;
      box-shadow: none !important;
      border: 1px solid #304ffe;
      outline-width: 0;
    }

    button:focus {
      -moz-box-shadow: none !important;
      -webkit-box-shadow: none !important;
      box-shadow: none !important;
      outline-width: 0;
    }

    a {
      color: inherit;
      cursor: pointer;
    }

    .btn-blue {
      background-color: #1a237e;
      width: 150px;
      color: #fff;
      border-radius: 2px;
    }

    .btn-blue:hover {
      background-color: #000;
      cursor: pointer;
    }

    .bg-blue {
      color: #fff;
      background-color: #1a237e;
    }

    @media screen and (max-width: 991px) {
      .logo {
        margin-left: 0px;
      }

      .image {
        width: 300px;
        height: 220px;
      }

      .border-line {
        border-right: none;
      }

      .card2 {
        border-top: 1px solid #eeeeee !important;
        margin: 0px 15px;
      }
    }
  </style>
</head>

<body oncontextmenu="return false" class="snippet-body">
  <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
      <div class="row d-flex">
        <div class="col-lg-6">
          <div class="card2 card border-0 px-4 py-5" id="form-daftar">
            <div class="row">
              <img src="<?= base_url('assets/dist/img/toko.jpg'); ?>" class="logo" />
            </div>
            <?php echo form_open('Login/daftarAkun') ?>
            <div style="text-align: center;color: red;">
              <h2><?php echo $this->session->flashdata('error') ?></h2>
            </div>
            <div class="row px-3 mb-4">
              <div class="line"></div>
              <small class="or text-center">Sign Up </small>
              <div class="line"></div>
            </div>
            <div class="row px-3">
              <label class="mb-1">
                <h6 class="mb-0 text-sm">Email Address</h6>
              </label>
              <input class="form-control" type="text" name="email" placeholder="Enter a valid email address" value="" autocomplete="off" required />
            </div>
            <div class="row px-3">
              <label class="mb-1">
                <h6 class="mb-0 text-sm">No Telp</h6>
              </label>
              <input class="form-control" type="text" name="telp" placeholder="Enter a valid No Telp" required />
            </div>
            <div class="row px-3">
              <label class="mb-1">
                <h6 class="mb-0 text-sm">Password</h6>
              </label>
              <input class="form-control" type="password" name="password" placeholder="Enter a password" required />
            </div>
            <div class="row px-3">
              <label class="mb-1">
                <h6 class="mb-0 text-sm">Repeat Password</h6>
              </label>
              <input class="form-control" type="password" name="password_repeat" placeholder="Enter a password" required />
            </div>
            <div class="row mb-3 px-3">
              <button type="submit" class="btn btn-blue text-center" disabled>
                Sign Up
              </button>
            </div>
            <div class="row mb-4 px-3">
              <small class="font-weight-bold">already have an account ?
                <a href="<?= base_url('Login'); ?>" class="text-danger">Login</a></small>
            </div>
          </div>
          </form>
        </div>
        <div class="col-lg-6">
          <div class="card1 pb-5">
            <?php if (mobile()) : ?>
              <div id="myMap" style="position:relative;width:300px;height:277px;margin-left: 23px;"></div>
            <?php else : ?>
              <div id="myMap" style="position:relative;width:562px;height:284px;margin-top: 233px;"></div>
              <!-- <iframe src="https://ca84-182-253-70-40.ngrok.io/" style="position:relative;width:562px;height:284px;margin-top: 233px;" frameborder="0"></iframe> -->
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="bg-blue py-4">
        <div class="row px-3">
          <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2019. All rights reserved.</small>
        </div>
      </div>
    </div>
  </div>
  <!-- jQuery 2.1.3 -->
  <script src="<?= base_url(); ?>assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
  <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
  <script type="text/javascript" src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <!-- <script type='text/javascript' src='http://www.bing.com/api/maps/mapcontrol?callback=GetMap&key=AtWtNvayYAjM3vq1VJn2iq4lOg9ikZxkHfTcoJvla1jeaeWAru64z9pUxE-r8mbf' async defer></script> -->
  <!-- <script type='text/javascript' src='https://www.bing.com/api/maps/mapcontrol?branch=experimental&key=AtWtNvayYAjM3vq1VJn2iq4lOg9ikZxkHfTcoJvla1jeaeWAru64z9pUxE-r8mbf&callback=loadMapScenario' async defer></script> -->
  <script type='text/javascript' src='https://www.bing.com/api/maps/mapcontrol?callback=GetMap' async defer></script>
  <script type='text/javascript'>
  function GetMap() {
        var map = new Microsoft.Maps.Map('#myMap', {
            credentials: 'AtWtNvayYAjM3vq1VJn2iq4lOg9ikZxkHfTcoJvla1jeaeWAru64z9pUxE-r8mbf',
            showLocateMeButton: true,
            showMapTypeSelector: false
        });
        // console.log('tester');

        //Request the user's location
        navigator.geolocation.getCurrentPosition(function (position) {
          // console.log(position);
            var loc = new Microsoft.Maps.Location(
                position.coords.latitude,
                position.coords.longitude);

            //Add a pushpin at the user's location.
            var pin = new Microsoft.Maps.Pushpin(loc);
            map.entities.push(pin);

            //Center the map on the user's location.
            map.setView({ center: loc, zoom: 15 });
        });
    }
  // function GetMap()
  //   {
  //     var map = new Microsoft.Maps.Map('#myMap', {
  //           credentials: 'AtWtNvayYAjM3vq1VJn2iq4lOg9ikZxkHfTcoJvla1jeaeWAru64z9pUxE-r8mbf',
  //           showLocateMeButton: false,
  //           showMapTypeSelector: false
  //       });
   
  //       var map = new Microsoft.Maps.Map('#myMap');

  //       //Add your post map load code here.
  //   }
    // function GetMap() {
    //   var map = new Microsoft.Maps.Map('#myMap');

    //   //Add your post map load code here.
    // }
    // function GetMap() {
    //     var map = new Microsoft.Maps.Map('#myMap', {
    //         // credentials: 'Your Bing Maps Key',
    //         center: new Microsoft.Maps.Location(-7.4189338, 112.7271187)
    //     });

    //     var center = map.getCenter();

    //     // Create custom Pushpin
    //     var pin = new Microsoft.Maps.Pushpin(center, {
    //         title: 'Microsoft',
    //         subTitle: 'City Center',
    //         text: '1'
    //     });

    //     // Add the pushpin to the map
    //     map.entities.push(pin);
    // }
    // function loadMapScenario() {
    //   // var map = new Microsoft.Maps.Map(document.getElementById('myMap'), {});
    //   var map = new Microsoft.Maps.Map('#myMap', {
    //         credentials: 'AtWtNvayYAjM3vq1VJn2iq4lOg9ikZxkHfTcoJvla1jeaeWAru64z9pUxE-r8mbf',
    //         // showLocateMeButton: false
    //         showMapTypeSelector: false
    //     });
   
    //   Microsoft.Maps.loadModule('Microsoft.Maps.DrawingTools', function() {
    //     var tools = new Microsoft.Maps.DrawingTools(map);
    //     tools.showDrawingManager(function(manager) {
    //       printText('Drawing manager loaded.');
    //       Microsoft.Maps.Events.addHandler(manager, 'drawingStarted', function() {
    //         printText('Drawing started.');
    //       });
    //       Microsoft.Maps.Events.addHandler(manager, 'drawingEnded', function() {
    //         printText('Drawing ended.');
    //       });
    //       Microsoft.Maps.Events.addHandler(manager, 'drawingErased', function() {
    //         printText('Drawing erased.');
    //       });
    //     });
    //   });

    //   function printText(text) {
    //     var panel = document.getElementById('printoutPanel');
    //     if (panel && text) {
    //       var line = document.createElement('div');
    //       line.appendChild(document.createTextNode(text));
    //       panel.appendChild(line);
    //     }
    //   }

    // }
  </script>
  <script type="text/javascript">
    var base_url = '<?= base_url() ?>';
    $('#form-daftar').on('keyup', 'input[name="email"]', function() {
      var email = $('input[name="email"]').closest('div').find('div'),
        telp = $('input[name="telp"]').closest('div').find('div'),
        password = $('input[name="password"]').closest('div').find('div'),
        password_repeat = $('input[name="password_repeat"]').closest('div').find('div');
      if (email.hasClass('valid-feedback') && telp.hasClass('valid-feedback') && password.hasClass('valid-feedback') && password_repeat.hasClass('valid-feedback')) {
        $('button[type="submit"]').removeAttr('disabled', 'disabled');
      } else {
        $('button[type="submit"]').attr('disabled', 'disabled');
      }

      $.ajax({
        type: "post",
        url: base_url + "Login/validationDaftarAkun",
        dataType: "json",
        data: {
          'name': 'email',
          'email': this.value
        },
        success: function(result) {
          if (result.st == 'salah') {
            $('input[name="email"]').addClass('is-invalid');
            $('input[name="email"]').removeClass('is-valid');
            $('input[name="email"]').closest('div').find('div.valid-feedback').remove();
            $('input[name="email"]').closest('div').find('div.invalid-feedback').remove();
            $('input[name="email"]').closest('div').append($('<div class="invalid-feedback">').append($(result.msg)));
          } else {
            $('input[name="email"]').addClass('is-valid');
            $('input[name="email"]').removeClass('is-invalid');
            $('input[name="email"]').closest('div').find('div.invalid-feedback').remove();
            $('input[name="email"]').closest('div').find('div.valid-feedback').remove();
            $('input[name="email"]').closest('div').append($('<div class="valid-feedback">').append('Looks good'));
          }
        }
      });
    });

    $('#form-daftar').on('keyup', 'input[name="telp"]', function() {
      var email = $('input[name="email"]').closest('div').find('div'),
        telp = $('input[name="telp"]').closest('div').find('div'),
        password = $('input[name="password"]').closest('div').find('div'),
        password_repeat = $('input[name="password_repeat"]').closest('div').find('div');
      if (email.hasClass('valid-feedback') && telp.hasClass('valid-feedback') && password.hasClass('valid-feedback') && password_repeat.hasClass('valid-feedback')) {
        $('button[type="submit"]').removeAttr('disabled', 'disabled');
      } else {
        $('button[type="submit"]').attr('disabled', 'disabled');
      }

      $.ajax({
        type: "post",
        url: base_url + "Login/validationDaftarAkun",
        dataType: "json",
        data: {
          'name': 'telp',
          'telp': this.value
        },
        success: function(result) {
          if (result.st == 'salah') {
            $('input[name="telp"]').addClass('is-invalid');
            $('input[name="telp"]').removeClass('is-valid');
            $('input[name="telp"]').closest('div').find('div.valid-feedback').remove();
            $('input[name="telp"]').closest('div').find('div.invalid-feedback').remove();
            $('input[name="telp"]').closest('div').append($('<div class="invalid-feedback">').append($(result.msg)));
          } else {
            $('input[name="telp"]').addClass('is-valid');
            $('input[name="telp"]').removeClass('is-invalid');
            $('input[name="telp"]').closest('div').find('div.invalid-feedback').remove();
            $('input[name="telp"]').closest('div').find('div.valid-feedback').remove();
            $('input[name="telp"]').closest('div').append($('<div class="valid-feedback">').append('Looks good'));
          }
        }
      });
    });

    $('#form-daftar').on('keyup', 'input[name="password"]', function() {
      var email = $('input[name="email"]').closest('div').find('div'),
        telp = $('input[name="telp"]').closest('div').find('div'),
        password = $('input[name="password"]').closest('div').find('div'),
        password_repeat = $('input[name="password_repeat"]').closest('div').find('div');
      if (email.hasClass('valid-feedback') && telp.hasClass('valid-feedback') && password.hasClass('valid-feedback') && password_repeat.hasClass('valid-feedback')) {
        $('button[type="submit"]').removeAttr('disabled', 'disabled');
      } else {
        $('button[type="submit"]').attr('disabled', 'disabled');
      }

      $.ajax({
        type: "post",
        url: base_url + "Login/validationDaftarAkun",
        dataType: "json",
        data: {
          'name': 'password',
          'password': this.value
        },
        success: function(result) {
          if (result.st == 'salah') {
            $('input[name="password"]').addClass('is-invalid');
            $('input[name="password"]').removeClass('is-valid');
            $('input[name="password"]').closest('div').find('div.valid-feedback').remove();
            $('input[name="password"]').closest('div').find('div.invalid-feedback').remove();
            $('input[name="password"]').closest('div').append($('<div class="invalid-feedback">').append($(result.msg)));
          } else {
            $('input[name="password"]').addClass('is-valid');
            $('input[name="password"]').removeClass('is-invalid');
            $('input[name="password"]').closest('div').find('div.invalid-feedback').remove();
            $('input[name="password"]').closest('div').find('div.valid-feedback').remove();
            $('input[name="password"]').closest('div').append($('<div class="valid-feedback">').append('Looks good'));
          }
        }
      });
    });

    $('#form-daftar').on('keyup', 'input[name="password_repeat"]', function() {
      var email = $('input[name="email"]').closest('div').find('div'),
        telp = $('input[name="telp"]').closest('div').find('div'),
        password = $('input[name="password"]').closest('div').find('div'),
        password_repeat = $('input[name="password_repeat"]').closest('div').find('div');
      if (email.hasClass('valid-feedback') && telp.hasClass('valid-feedback') && password.hasClass('valid-feedback') && password_repeat.hasClass('valid-feedback')) {
        $('button[type="submit"]').removeAttr('disabled', 'disabled');
      } else {
        $('button[type="submit"]').attr('disabled', 'disabled');
      }

      $.ajax({
        type: "post",
        url: base_url + "Login/validationDaftarAkun",
        dataType: "json",
        data: {
          'name': 'password_repeat',
          'password_utama': $('input[name="password"]').val(),
          'password_repeat': this.value,
        },
        success: function(result) {
          if (result.st == 'salah') {
            $('input[name="password_repeat"]').addClass('is-invalid');
            $('input[name="password_repeat"]').removeClass('is-valid');
            $('input[name="password_repeat"]').closest('div').find('div.valid-feedback').remove();
            $('input[name="password_repeat"]').closest('div').find('div.invalid-feedback').remove();
            $('input[name="password_repeat"]').closest('div').append($('<div class="invalid-feedback">').append($(result.msg)));
          } else {
            $('input[name="password_repeat"]').addClass('is-valid');
            $('input[name="password_repeat"]').removeClass('is-invalid');
            $('input[name="password_repeat"]').closest('div').find('div.invalid-feedback').remove();
            $('input[name="password_repeat"]').closest('div').find('div.valid-feedback').remove();
            $('input[name="password_repeat"]').closest('div').append($('<div class="valid-feedback">').append('Looks good'));
          }
        }
      });
    });
  </script>
</body>

</html>