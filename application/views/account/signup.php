<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="EAvila">
    <title>Lawkit | Crear cuenta</title>
    
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .auth-box { height: 700px !important; }
    </style>
    <!-- plugins style -->
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/bs.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/jquery.passwordRequirements.css">
    <link href="<?=base_url();?>assets/plugins/sweet/sweetalert2.min.css" rel="stylesheet">
    <!-- plugins js -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="<?=base_url();?>assets/js/bs.min.js"></script>
    <script src="<?=base_url();?>assets/js/feather.min.js"></script>
    <script src="<?=base_url();?>assets/js/jquery.passwordRequirements.min.js"></script>
    <script src="<?=base_url();?>assets/plugins/sweet/sweetalert2.min.js"></script>

    <script type="text/javascript" src="https://js.stripe.com/v3/"></script>

    <link href="<?=base_url();?>assets/css/signup.css" rel="stylesheet">

<script type="text/javascript">
   var stripe = Stripe('pk_test_51N11RHSHFLlPQCJ7IGRtR5gOQjARzT4nA7fV4lkdorXtPvUUg8WIjbCO0mb6dRGmf27MqOz3a0RWk6HU4fmec07G00avlzY1li');

   $(document).ready(function() {
      
      feather.replace();
        
      $('button.close').on('click', function(){
         $('div.toast').remove();
      })
      
      
        
      $('.pr-password').passwordRequirements({
         numCharacters: 8,
         useLowercase: true,
         useUppercase: true,
         useNumbers: true,
         useSpecial: false
      });
      
   });
</script>

<style>
	#card-element {
	  background-color: white;
	  padding: 0.7em;
	  border: 1px solid #ccc;
	  border-radius: 5px;
	}
</style>




  </head>
  <body class="page-login">

    <a href="<?=base_url();?>" id="anchor-cancel-payment-intent" style="z-index: 100;">
      <i data-feather="arrow-left" id="icon-cancel-payment-intent"></i> Cancelar
    </a>


    <?php echo $this->session->flashdata('toast'); ?>
   
    <div class="vertical-align-container">
         <div class="vertical-align-middle">
            <div class="auth-box">
               <div class="left">
                  <div class="content">
                     <form method="post" action="<?=base_url('account/signup');?>" id="signup-form">
                      <h1 class="h3 mb-4 font-weight-normal text-center">Crear cuenta</h1>
                <div class="form-row">
                
                </div>
                <div class="form-row">
                  <div class="form-group col-6">
                    <label class="text-left">Nombre de usuario</label>
                    <input type="text" id="fusername" name="fusername" class="lawkit-input" required="" autofocus="" value="<?=$this->input->post('fusername');?>">
                  </div>                  
                  <div class="form-group col-6">
                    <label class="text-left">Apellido de usuario</label>
                    <input type="text" id="lusername" name="lusername" class="lawkit-input" required="" value="<?=$this->input->post('lusername');?>">
                  </div>                  
                </div>
                <div class="form-row">
                  <div class="form-group col-12">
                    <label class="text-left">Correo electrónico</label>
                    <input type="email" id="email" name="email" class="lawkit-input" required="" value="<?=$this->input->post('email');?>">
                  </div>                  
                </div>
                <div class="form-row">
                  <div class="form-group col-6">
                    <label class="form-label">Contraseña</label>
                    <input type="password" id="password" name="password" class="lawkit-input pr-password" required="" value="<?=$this->input->post('password');?>">
                  </div>
                  <div class="form-group col-6">
                    <label class="form-label">Confirmar contraseña</label>
                    <input type="password" class="lawkit-input" name="password_confirm" id="password_confirm" value="<?=$this->input->post('password_confirm');?>" required>
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-12">
                    <label class="text-left">Cupón de descuento</label>
                    <input type="text" id="coupon" name="coupon" class="lawkit-input" value="<?=$this->input->post('coupon');?>">
                  </div>                  
                </div>

                <!-- añadir TDC -->
                <div id="card-element" class="mb-3"></div>
                <input type="hidden" name="payment_method_id" id="payment_method_id">
                <input type="hidden" name="card_token" id="card_token">
                <div class="d-flex">
                   <div>
                      <small>Powered by <a href="https://stripe.com/es-mx" target="_blank">Stripe</a></small>
                   </div>
                   <div class="ml-auto">
                      <img src="<?=base_url();?>assets/images/stripe-pago.png" style="max-width:4em;">
                   </div>
                </div>
                
                <div class="form-row">
                  <div class="form-group col-12">
                  <div class="custom-control custom-switch">
                     <input type="checkbox" class="custom-control-input" id="customSwitch1">
                     <label class="custom-control-label" for="customSwitch1">Al crear la cuenta aceptas los <a download href="download" class="text-primary">términos y condiciones</a> del servicio de lawkit.</label>
                  </div>
                  </div>
                </div>

                <button class="lawkit-btn bg-lk-blue-o2 mt-2 disabled" disabled type="button">CREAR CUENTA</button>
                <!-- // -->


                
              </form>
                  </div>
               </div>
               <div class="right">
                  <div class="overlay"></div>
                  <div class="content text text-center">
                     <svg width="355" height="150" viewBox="0 0 355 150" fill="none" xmlns="http://www.w3.org/2000/svg">
   <g id="lawkit-logo">
      <g id="Registered-symbol">
         <g id="Registered-symbol_2">
            <path id="path36" d="M345.464 95.297C341.977 95.2944 339.138 98.0573 339.135 101.456C339.133 104.855 341.967 107.623 345.454 107.626C348.94 107.63 351.78 104.866 351.783 101.467C351.785 98.0675 348.951 95.2995 345.464 95.297ZM345.452 108.92C341.234 108.916 337.806 105.568 337.81 101.455C337.812 97.342 341.247 94.0003 345.465 94.0042C349.684 94.0067 353.113 97.3548 353.109 101.468C353.106 105.578 349.671 108.922 345.452 108.92" fill="#13263E"/>
         </g>
         <g id="g38">
            <path id="path40" d="M344.564 100.97H345.663C346.008 100.97 346.258 100.91 346.415 100.787C346.572 100.665 346.651 100.47 346.651 100.201C346.651 99.9381 346.573 99.7456 346.417 99.6232C346.259 99.502 346.009 99.4396 345.664 99.4396L344.565 99.4383L344.564 100.97ZM345.531 102.088L344.563 102.086L344.561 104.295L342.972 104.293L342.977 98.2462L345.939 98.2475C346.69 98.2488 347.268 98.4145 347.672 98.7447C348.075 99.0749 348.279 99.5518 348.277 100.175C348.277 100.615 348.173 100.981 347.966 101.273C347.759 101.567 347.458 101.784 347.062 101.923L348.64 104.297L346.854 104.296L345.531 102.088Z" fill="#13263E"/>
         </g>
      </g>
      <g id="Letter-a">
         <path id="path44" d="M58.9497 109.698C63.0754 109.698 65.0905 109.763 68.0811 109.763C68.627 109.763 69.0212 109.744 69.6184 109.167C70.0748 108.725 70.261 107.472 70.7476 106.89C71.4109 106.096 73.3834 104.972 73.8947 104.721C76.895 103.248 81.2043 103.318 84.3204 104.523C88.0129 105.951 89.6945 108.856 90.0486 112.467C90.1694 113.699 89.9664 115.089 88.7587 115.325C87.1096 115.647 84.6646 115.443 82.2845 115.443C77.3103 115.443 72.6524 115.24 68.215 115.65C66.605 115.799 64.3008 115.936 62.3504 116.651C59.5462 117.68 56.8465 120.026 55.2008 122.222C52.4669 125.872 52.705 131.102 53.6494 135.572C54.2099 138.225 56.3092 141.141 58.7838 142.92C61.3762 144.784 64.392 145.457 67.0016 145.891C69.3362 146.28 71.6029 146.575 74.1833 146.483C77.0654 146.329 79.3033 146.152 81.8641 145.124C83.5405 144.579 84.9678 143.873 86.1931 143.145C88.6117 141.709 90.4784 140.476 91.4402 139.349C92.264 140.9 92.8328 143.278 93.1481 144.671C93.3157 145.412 93.6246 145.591 94.4562 145.558C100.241 145.329 99.6585 145.565 101.755 145.487C103.757 145.412 104.029 146.159 103.998 143.911C103.891 136.207 103.865 122.597 103.836 113.348C103.813 106.174 100.594 100.029 94.3576 96.5517C87.5221 92.7407 77.6134 91.8873 69.2907 94.5239C65.4371 95.7447 61.6038 98.014 59.01 101.5C57.3107 103.784 56.2865 106.968 55.6376 109.405C55.4352 110.165 58.0506 109.698 58.9497 109.698V109.698Z" stroke="#13263E"/>
         <path id="path45" d="M87.1856 123.896C87.1856 123.896 81.9058 123.26 71.563 124.253C69.9317 124.41 66.7525 127.779 66.946 130.066C67.1591 132.584 68.9515 134.899 71.3763 135.876C74.4771 137.126 80.551 136.768 83.3029 134.998C87.3569 132.39 89.8284 129.407 89.8914 124.566C89.9049 123.532 87.1856 123.896 87.1856 123.896" stroke="#13263E"/>
      </g>
      <g id="Letter-w">
         <g id="path48">
            <mask id="path-5-inside-2" fill="white">
               <path d="M180.507 95.2919C178.969 95.2498 178.3 95.8057 177.79 97.1699C174.687 105.449 171.497 113.697 168.332 121.953C167.417 124.344 166.487 126.73 165.383 129.586C164.959 128.553 164.736 128.071 164.559 127.573C160.934 117.373 157.325 107.167 153.665 96.9786C153.444 96.3654 152.832 95.4321 152.38 95.4206C148.072 95.3008 143.758 95.3492 139.141 95.3492C141.092 100.578 142.942 105.43 144.684 110.32C144.951 111.071 144.974 112.087 144.68 112.814C142.364 118.533 139.947 124.216 137.545 129.902C137.333 130.403 137.007 130.858 136.595 131.58C136.015 130.07 135.569 128.921 135.131 127.77C131.233 117.521 127.349 107.266 123.405 97.0322C123.154 96.3807 122.451 95.4296 121.932 95.4143C117.747 95.2804 113.557 95.339 109.253 95.339C109.335 95.923 109.32 96.2748 109.438 96.5783C115.657 112.62 121.873 128.664 128.175 144.675C128.402 145.255 129.46 145.853 130.15 145.877C133.795 145.996 137.45 145.871 141.097 145.965C142.335 145.998 142.832 145.468 143.224 144.484C143.959 142.636 144.762 140.814 145.538 138.982C147.214 135.027 148.891 131.072 150.767 126.646C151.258 127.726 151.553 128.312 151.794 128.92C153.837 134.084 155.902 139.24 157.88 144.426C158.316 145.57 158.908 145.992 160.173 145.961C163.68 145.877 167.193 145.85 170.699 145.971C172.178 146.022 172.745 145.467 173.243 144.197C178.289 131.373 183.405 118.576 188.491 105.768C189.824 102.411 191.121 99.0402 192.571 95.3263C188.316 95.3263 184.409 95.3977 180.507 95.2919Z"/>
            </mask>
            <path d="M180.507 95.2919C178.969 95.2498 178.3 95.8057 177.79 97.1699C174.687 105.449 171.497 113.697 168.332 121.953C167.417 124.344 166.487 126.73 165.383 129.586C164.959 128.553 164.736 128.071 164.559 127.573C160.934 117.373 157.325 107.167 153.665 96.9786C153.444 96.3654 152.832 95.4321 152.38 95.4206C148.072 95.3008 143.758 95.3492 139.141 95.3492C141.092 100.578 142.942 105.43 144.684 110.32C144.951 111.071 144.974 112.087 144.68 112.814C142.364 118.533 139.947 124.216 137.545 129.902C137.333 130.403 137.007 130.858 136.595 131.58C136.015 130.07 135.569 128.921 135.131 127.77C131.233 117.521 127.349 107.266 123.405 97.0322C123.154 96.3807 122.451 95.4296 121.932 95.4143C117.747 95.2804 113.557 95.339 109.253 95.339C109.335 95.923 109.32 96.2748 109.438 96.5783C115.657 112.62 121.873 128.664 128.175 144.675C128.402 145.255 129.46 145.853 130.15 145.877C133.795 145.996 137.45 145.871 141.097 145.965C142.335 145.998 142.832 145.468 143.224 144.484C143.959 142.636 144.762 140.814 145.538 138.982C147.214 135.027 148.891 131.072 150.767 126.646C151.258 127.726 151.553 128.312 151.794 128.92C153.837 134.084 155.902 139.24 157.88 144.426C158.316 145.57 158.908 145.992 160.173 145.961C163.68 145.877 167.193 145.85 170.699 145.971C172.178 146.022 172.745 145.467 173.243 144.197C178.289 131.373 183.405 118.576 188.491 105.768C189.824 102.411 191.121 99.0402 192.571 95.3263C188.316 95.3263 184.409 95.3977 180.507 95.2919Z" stroke="#13263E" stroke-width="2" mask="url(#path-5-inside-2)"/>
         </g>
      </g>
      <g id="Letter-i">
         <g id="path52">
            <mask id="path-6-inside-3" fill="white">
               <path d="M274.669 129.043C274.669 123.44 274.654 101.399 274.687 95.7964C274.691 95.0824 274.528 94.7675 273.441 94.7828C269.729 94.835 266.014 94.8287 262.301 94.7866C261.296 94.7751 260.985 94.9791 260.987 95.7594C261.02 107.003 261.022 134.686 260.983 145.93C260.979 146.792 261.373 146.955 262.401 146.944C266.012 146.904 269.623 146.894 273.231 146.949C274.377 146.966 274.706 146.74 274.697 145.851C274.64 140.249 274.669 134.647 274.669 129.043Z"/>
            </mask>
            <path d="M274.669 129.043C274.669 123.44 274.654 101.399 274.687 95.7964C274.691 95.0824 274.528 94.7675 273.441 94.7828C269.729 94.835 266.014 94.8287 262.301 94.7866C261.296 94.7751 260.985 94.9791 260.987 95.7594C261.02 107.003 261.022 134.686 260.983 145.93C260.979 146.792 261.373 146.955 262.401 146.944C266.012 146.904 269.623 146.894 273.231 146.949C274.377 146.966 274.706 146.74 274.697 145.851C274.64 140.249 274.669 134.647 274.669 129.043Z" stroke="#13263E" stroke-width="2" mask="url(#path-6-inside-3)"/>
         </g>
      </g>
      <g id="Letter-i-dot">
         <g id="path56">
            <mask id="path-7-inside-4" fill="white">
               <path d="M267.879 66.296C262.999 66.3189 259.68 69.5102 259.688 74.1701C259.696 78.7995 263.072 82.0048 267.94 82.0086C272.858 82.0124 276.278 78.7167 276.21 74.0401C276.143 69.3839 272.797 66.273 267.879 66.296Z"/>
            </mask>
            <path d="M267.879 66.296C262.999 66.3189 259.68 69.5102 259.688 74.1701C259.696 78.7995 263.072 82.0048 267.94 82.0086C272.858 82.0124 276.278 78.7167 276.21 74.0401C276.143 69.3839 272.797 66.273 267.879 66.296Z" stroke="#13263E" stroke-width="2" mask="url(#path-7-inside-4)"/>
         </g>
      </g>
      <g id="Letter-l">
         <g id="path60">
            <mask id="path-8-inside-5" fill="white">
               <path d="M43.8723 134.682H43.6405V134.654H16.2048V104.786V95.6866V94.01C16.2048 93.4656 15.7491 93.0193 15.1918 93.0193H3.50641C2.94916 93.0193 2.49216 93.4656 2.49216 94.01V95.6866V104.786V130.02V135.671V143.458V145.961C2.49216 146.504 2.94916 146.949 3.50641 146.949H43.6405H43.8723C44.4308 146.949 44.8865 146.504 44.8865 145.961V135.671C44.8865 135.129 44.4308 134.682 43.8723 134.682Z"/>
            </mask>
            <path d="M43.8723 134.682H43.6405V134.654H16.2048V104.786V95.6866V94.01C16.2048 93.4656 15.7491 93.0193 15.1918 93.0193H3.50641C2.94916 93.0193 2.49216 93.4656 2.49216 94.01V95.6866V104.786V130.02V135.671V143.458V145.961C2.49216 146.504 2.94916 146.949 3.50641 146.949H43.6405H43.8723C44.4308 146.949 44.8865 146.504 44.8865 145.961V135.671C44.8865 135.129 44.4308 134.682 43.8723 134.682Z" stroke="#13263E" stroke-width="2" mask="url(#path-8-inside-5)"/>
         </g>
      </g>
      <g id="Letter-t">
         <g id="path64">
            <mask id="path-9-inside-6" fill="white">
               <path d="M329.217 95.2134H328.985H313.057H301.303H285.376H285.144C284.587 95.2134 284.13 95.6584 284.13 96.2015V106.928C284.13 107.472 284.587 107.918 285.144 107.918H285.376V107.946H300.289V112.581V137.97V144.283V145.961C300.289 146.504 300.744 146.949 301.303 146.949H301.373H312.987H313.057C313.616 146.949 314.073 146.504 314.073 145.961V144.283V137.97V112.581V107.946H328.985V107.918H329.217C329.775 107.918 330.231 107.472 330.231 106.928V96.2015C330.231 95.6584 329.775 95.2134 329.217 95.2134Z"/>
            </mask>
            <path d="M329.217 95.2134H328.985H313.057H301.303H285.376H285.144C284.587 95.2134 284.13 95.6584 284.13 96.2015V106.928C284.13 107.472 284.587 107.918 285.144 107.918H285.376V107.946H300.289V112.581V137.97V144.283V145.961C300.289 146.504 300.744 146.949 301.303 146.949H301.373H312.987H313.057C313.616 146.949 314.073 146.504 314.073 145.961V144.283V137.97V112.581V107.946H328.985V107.918H329.217C329.775 107.918 330.231 107.472 330.231 106.928V96.2015C330.231 95.6584 329.775 95.2134 329.217 95.2134Z" stroke="#13263E" stroke-width="2" mask="url(#path-9-inside-6)"/>
         </g>
      </g>
      <g id="Letter-k">
         <g id="path72">
            <mask id="path-10-inside-7" fill="white">
               <path d="M250.244 135.141C241.34 136.224 239.594 135.433 234.616 128.16C233.239 126.15 232.032 124.017 230.531 122.1C229.493 120.777 229.486 119.858 230.462 118.465C235.718 110.961 240.872 103.39 246.005 95.8043L248.295 92.3504H236.99C236.288 92.3427 235.59 92.33 234.892 92.3134C233.433 92.279 232.594 92.7482 231.831 93.9734C227.971 100.175 224.024 106.327 220.065 112.471C219.659 113.103 218.992 113.99 218.402 114.023C216.501 114.131 214.586 114.127 212.602 114.113V107.594V103.822V102.759V97.8786V96.202C212.602 95.6576 212.148 95.214 211.592 95.214H199.96C199.405 95.214 198.951 95.6576 198.951 96.202V97.8786V102.759V107.594V134.567V138.338V139.401V144.281V145.957C198.951 146.502 199.405 146.947 199.96 146.947H211.592C212.148 146.947 212.602 146.502 212.602 145.957V144.281V139.401V134.567V125.767C216.509 125.073 218.703 126.878 220.628 130.149C223.006 134.191 225.731 138.147 228.919 141.598C235.06 148.251 242.008 148.581 250.102 145.915C250.648 145.735 251.394 144.922 251.355 144.461C251.088 141.343 250.636 138.243 250.244 135.141Z"/>
            </mask>
            <path d="M250.244 135.141C241.34 136.224 239.594 135.433 234.616 128.16C233.239 126.15 232.032 124.017 230.531 122.1C229.493 120.777 229.486 119.858 230.462 118.465C235.718 110.961 240.872 103.39 246.005 95.8043L248.295 92.3504H236.99C236.288 92.3427 235.59 92.33 234.892 92.3134C233.433 92.279 232.594 92.7482 231.831 93.9734C227.971 100.175 224.024 106.327 220.065 112.471C219.659 113.103 218.992 113.99 218.402 114.023C216.501 114.131 214.586 114.127 212.602 114.113V107.594V103.822V102.759V97.8786V96.202C212.602 95.6576 212.148 95.214 211.592 95.214H199.96C199.405 95.214 198.951 95.6576 198.951 96.202V97.8786V102.759V107.594V134.567V138.338V139.401V144.281V145.957C198.951 146.502 199.405 146.947 199.96 146.947H211.592C212.148 146.947 212.602 146.502 212.602 145.957V144.281V139.401V134.567V125.767C216.509 125.073 218.703 126.878 220.628 130.149C223.006 134.191 225.731 138.147 228.919 141.598C235.06 148.251 242.008 148.581 250.102 145.915C250.648 145.735 251.394 144.922 251.355 144.461C251.088 141.343 250.636 138.243 250.244 135.141Z" stroke="#13263E" stroke-width="2" mask="url(#path-10-inside-7)"/>
         </g>
      </g>
      <g id="Shape-3">
         <g id="path20">
            <mask id="path-11-inside-8" fill="white">
               <path d="M195.881 5.48689C191.541 1.25658 184.44 1.25658 180.102 5.48689L156.046 28.825V30.3958C156.046 37.6375 162.068 43.5087 169.496 43.5087H172.544L195.881 20.8693C200.22 16.6402 200.22 9.71721 195.881 5.48689Z"/>
            </mask>
            <path d="M195.881 5.48689C191.541 1.25658 184.44 1.25658 180.102 5.48689L156.046 28.825V30.3958C156.046 37.6375 162.068 43.5087 169.496 43.5087H172.544L195.881 20.8693C200.22 16.6402 200.22 9.71721 195.881 5.48689Z" stroke="#25D3FB" stroke-width="2" mask="url(#path-11-inside-8)"/>
         </g>
      </g>
      <g id="Shape-1">
         <g id="path24">
            <mask id="path-12-inside-9" fill="white">
               <path d="M156.046 28.8253V22.1254C156.046 16.1433 151.025 11.2474 144.888 11.2474C138.751 11.2474 133.729 16.1433 133.729 22.1254V55.0856C133.729 55.0882 133.731 55.0895 133.731 55.092C133.732 52.3062 134.817 49.5204 136.984 47.4078L156.046 28.8253Z"/>
            </mask>
            <path d="M156.046 28.8253V22.1254C156.046 16.1433 151.025 11.2474 144.888 11.2474C138.751 11.2474 133.729 16.1433 133.729 22.1254V55.0856C133.729 55.0882 133.731 55.0895 133.731 55.092C133.732 52.3062 134.817 49.5204 136.984 47.4078L156.046 28.8253Z" stroke="#7B78FB" stroke-width="2" mask="url(#path-12-inside-9)"/>
         </g>
      </g>
      <g id="Shape-2">
         <g id="path28">
            <mask id="path-13-inside-10" fill="white">
               <path d="M156.046 30.396V28.8252L136.984 47.4078C134.817 49.5204 133.732 52.3061 133.731 55.0919C133.731 55.4629 133.75 55.8289 133.788 56.1897C133.789 56.2024 133.792 56.2152 133.793 56.2292C134.344 61.3035 138.51 65.3656 143.717 65.901C143.73 65.9023 143.742 65.9061 143.755 65.9074C144.126 65.9431 144.501 65.9622 144.881 65.9622C144.946 65.9622 145.01 65.9546 145.074 65.9533C145.378 65.9482 145.68 65.9367 145.979 65.9087C146.132 65.8947 146.286 65.8653 146.439 65.8437C146.652 65.8156 146.865 65.7901 147.072 65.7493C147.195 65.7251 147.314 65.6919 147.436 65.6639C147.68 65.6078 147.925 65.5517 148.163 65.4803C148.219 65.4637 148.273 65.4421 148.329 65.4242C150.015 64.8862 151.53 63.9707 152.761 62.7748L152.763 62.7901L172.543 43.5089H169.497C162.067 43.5089 156.046 37.6377 156.046 30.396Z"/>
            </mask>
            <path d="M156.046 30.396V28.8252L136.984 47.4078C134.817 49.5204 133.732 52.3061 133.731 55.0919C133.731 55.4629 133.75 55.8289 133.788 56.1897C133.789 56.2024 133.792 56.2152 133.793 56.2292C134.344 61.3035 138.51 65.3656 143.717 65.901C143.73 65.9023 143.742 65.9061 143.755 65.9074C144.126 65.9431 144.501 65.9622 144.881 65.9622C144.946 65.9622 145.01 65.9546 145.074 65.9533C145.378 65.9482 145.68 65.9367 145.979 65.9087C146.132 65.8947 146.286 65.8653 146.439 65.8437C146.652 65.8156 146.865 65.7901 147.072 65.7493C147.195 65.7251 147.314 65.6919 147.436 65.6639C147.68 65.6078 147.925 65.5517 148.163 65.4803C148.219 65.4637 148.273 65.4421 148.329 65.4242C150.015 64.8862 151.53 63.9707 152.761 62.7748L152.763 62.7901L172.543 43.5089H169.497C162.067 43.5089 156.046 37.6377 156.046 30.396Z" stroke="#0D4FE0" stroke-width="2" mask="url(#path-13-inside-10)"/>
         </g>
      </g>
      <g id="Shape-4">
         <g id="path32">
            <mask id="path-14-inside-11" fill="white">
               <path d="M184.08 43.5085H172.563V54.7358C172.563 60.9359 177.72 65.963 184.08 65.963C190.44 65.963 195.596 60.9359 195.596 54.7358C195.596 48.5344 190.44 43.5085 184.08 43.5085Z"/>
            </mask>
            <path d="M184.08 43.5085H172.563V54.7358C172.563 60.9359 177.72 65.963 184.08 65.963C190.44 65.963 195.596 60.9359 195.596 54.7358C195.596 48.5344 190.44 43.5085 184.08 43.5085Z" stroke="#7B78FB" stroke-width="2" mask="url(#path-14-inside-11)"/>
         </g>
      </g>
   </g>
</svg>
                  </div>
                  <div class="row justify-content-end mt-2">
                  <a href="<?=base_url();?>">
                  <img class="mb-4 wow pulse " data-wow-iteration="infinite" src="<?=base_url();?>assets/images/logo-oficial-min.png" alt="" width="65" height="25">
                  </a>
                  </div>
               </div>
               <div class="clearfix"></div>
            </div>
         </div>
      </div>

<script type="text/javascript">


var elements = stripe.elements();

var card = elements.create('card');
card.mount('#card-element')

card.on("change", function(event){
  displayError(event)
})

function displayError(event){
   if(event.error){
      Swal.fire({
         type: 'error',
         title: 'Oops...',
         text: event.error.message
      })
   }
}

$('form input').on('keydown', function(e){
   if( e.keyCode == 13 )
   {
      e.preventDefault()
      return false;
   }
})

$("#customSwitch1").on("change", function(event){
   if(event.target.checked) {
      $('.lawkit-btn').removeClass('disabled').removeAttr("disabled")
   } else {
      $(".lawkit-btn").addClass("disabled").attr('disabled', true);
   }
})


$('.lawkit-btn').on('click', function(){
   var btn = $(this)
   btn.addClass("disabled").attr('disabled', true).html('...');
   if($('#fusername').val().length <= 0){
      Swal.fire({
         type: 'error',
         title: `oops...`,
         text: 'Debes ingresar un nombre de usuario'
      })
      btn.removeClass("disabled").removeAttr('disabled').html('Crear cuenta');
      return false;
   }
   if($('#lusername').val().length <= 0){
      Swal.fire({
         type: 'error',
         title: `oops...`,
         text: 'Debes ingresar apellidos'
      })
      btn.removeClass("disabled").removeAttr('disabled').html('Crear cuenta');
      return false;
   }
   if($('#email').val().length <= 0){
      Swal.fire({
         type: 'error',
         title: `oops...`,
         text: 'El campo de correo electrónico es obligatorio'
      })
      btn.removeClass("disabled").removeAttr('disabled').html('Crear cuenta');
      return false;
   }
   if($('#password_confirm').val() != $('#password').val()){
      Swal.fire({
         type: 'error',
         title: `oops...`,
         text: 'Las contraseñas ingresadas no coinciden'
      })
      btn.removeClass("disabled").removeAttr('disabled').html('Crear cuenta');
      return false;
   }
           
   //$('#signup-form').submit();
   stripe.createPaymentMethod({
      type: 'card',
      card: card,
      billing_details: {
         name: $('#fusername').val()+' '+$('#lusername').val(),
      },
   }).then(function(result) {
      if (result.error) {
         // Display error.message in your UI
         btn.removeClass("disabled").removeAttr('disabled').html('Crear cuenta');
         Swal.fire({
            type: 'error',
            title: `oops...`,
            text: result.error.message
         })
      } else {
         stripe.createToken(card).then(function(res){
            if(res.error){
               btn.removeClass("disabled").removeAttr('disabled').html('Crear cuenta');
               Swal.fire({
                  type: 'error',
                  title: `oops...`,
                  text: result.error.message
               })
            } else {
               $('#payment_method_id').val(result.paymentMethod.id);
               $('#card_token').val(res.token.id);
               $('#signup-form').submit();
            }
         });
      }
   });

            
           

});
</script>

</body>
</html>