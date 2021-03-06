<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body class="horizontal-layout horizontal-menu 2-columns  navbar-floating footer-static  " data-open="hover"
    data-menu="horizontal-menu" data-col="2-columns">
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.horizontal-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Form wizard with number tabs section start -->
                <section id="icon-tabs">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> <i class="ri-information-line"></i> Choisis Votre Vehicule
                                        d??sir??</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Suivi les ??tapes suivantes en remplissant les <code>informations</code>
                                            requises.
                                        </p>
                                        <?php if($errors->any()): ?>

                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="alert alert-danger mt-1 alert-dismissible alert-validation-msg"
                                            role="alert">
                                            <i class="feather icon-info mr-1 align-middle"></i>
                                            <strong><?php echo e($error); ?></strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                        <?php endif; ?>
                                        <form action="<?php echo e(route('check.store')); ?>" method="post"
                                            class="number-tab-steps wizard-circle" id="myForm">
                                            <?php echo csrf_field(); ?>
                                            <!-- Step 1 -->
                                            <h6><i class="step-icon feather ri-car-fill"></i>G??n??ral</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="firstName1">Marque</label>
                                                            <select class="form-control" id="basicSelect" name="brands">
                                                                <option value="" disabled selected>Marque
                                                                </option>
                                                                <?php $__currentLoopData = $marques; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marque): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($marque->model); ?>">
                                                                    <?php echo e($marque->model); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="lastName1">Mod??le</label>
                                                            <select class="form-control" id="basicSelect" name="model">
                                                                <option value="" disabled selected>Mod??le
                                                                </option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="emailAddress1">Serie</label>
                                                            <select class="form-control" id="basicSelect" name="serie">
                                                                <option value="" disabled selected>Serie
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="location1">Ann??e</label>
                                                            <select class="form-control" id="basicSelect"
                                                                name="matricule">
                                                                <option value="2021">2021</option>
                                                                <option value="2020">2020</option>
                                                                <option value="2019">2019</option>
                                                                <option value="2018">2018</option>
                                                                <option value="2017">2017</option>
                                                                <option value="2016">2016</option>

                                                                <option value="2015">2015</option>
                                                                <option value="2014">2014</option>
                                                                <option value="2013">2013</option>
                                                                <option value="2012">2012</option>
                                                                <option value="2011">2011</option>
                                                                <option value="2010">2010</option>
                                                                <option value="2009">2009</option>

                                                                <option value="2008">2008</option>
                                                                <option value="2007">2007</option>
                                                                <option value="2006">2006</option>
                                                                <option value="2005">2005</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <!-- Step 2 -->
                                            <h6><i class="step-icon feather ri-settings-2-fill"></i>D??tails</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="firstName1">Couleur</label>
                                                            <select class="form-control" id="basicSelect"
                                                                name="couleur">
                                                                <option value="Blanc">Blanc</option>
                                                                <option value="Noir">Noir</option>
                                                                <option value="Blue ciel">Blue ciel</option>
                                                                <option value="Blue">Blue</option>
                                                                <option value="Gris">Gris</option>
                                                                <option value="Gris souris">Gris souris</option>


                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="lastName1">Energie</label>
                                                            <select class="form-control" id="basicSelect"
                                                                name="energie">
                                                                <option value="Essence">Essence</option>
                                                                <option value="Diezel">Diezel</option>
                                                                <option value="Gpl">Gpl</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="firstName1">Transmission</label>
                                                            <select class="form-control" id="basicSelect" name="trans">
                                                                <option value="Manuelle">Manuelle</option>
                                                                <option value="Automatique">Automatique</option>
                                                                <option value="semi">Semi</option>

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="lastName1">Kilomitrage</label>
                                                            <input type="text" id="first-name-vertical"
                                                                class="form-control" name="kilomitrage"
                                                                placeholder="kilomitrage">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <!-- Step 3 -->
                                            <h6><i class="step-icon feather ri-coins-fill"></i>Prix</h6>
                                            <fieldset>
                                                <div class="row pt-3">
                                                    <div class="col-sm-2"></div>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <p for="eventName1" class="text-center">Prix</p>
                                                            <input type="text" class="form-control" id="eventName1"
                                                                placeholder="Entrer Le Prix" name="prix">
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-2"></div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Form wizard with number tabs section end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.footer-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <script>
        $(document).ready(function() {
                    $('select[name="brands"]').on('change', function() {
                        var BrandId = $(this).val();
                        if (BrandId) {
                            $.ajax({
                                url: "<?php echo e(URL::to('model')); ?>/" + BrandId,
                                type: "GET",
                                dataType: "json",
                                success: function(data) {
                                    $('select[name="model"]').empty();
                                    $.each(data, function(key, value) {
                                        $('select[name="model"]').append('<option value="' +
                                            key + '">' + key + '</option>');
                                    });
                                },
                            });
                        } else {
                            console.log('AJAX load did not work');
                        }
                    });
                });
    </script>
    <script>
        $(document).ready(function() {
                    $('select[name="model"]').on('change', function() {
                        var ModelId = $(this).val();
                        if (ModelId) {
                            $.ajax({
                                url: "<?php echo e(URL::to('serie')); ?>/" + ModelId,
                                type: "GET",
                                dataType: "json",
                                success: function(data) {
                                    $('select[name="serie"]').empty();
                                    $.each(data, function(key, value) {
                                        $('select[name="serie"]').append('<option value="' +
                                            key + '">' + key + '</option>');
                                    });
                                },
                            });
                            
                            $.ajax({
                                url: "<?php echo e(URL::to('type')); ?>/" + ModelId,
                                type: "GET",
                                dataType: "json",
                                success: function(data) {
                                    $('select[name="type"]').empty();
                                    $.each(data, function(key, value) {
                                        $('select[name="type"]').append('<option value="' +
                                            key + '">' + key + '</option>');
                                    });
                                },
                            });
                            $.ajax({
                                url: "<?php echo e(URL::to('engine')); ?>/" + ModelId,
                                type: "GET",
                                dataType: "json",
                                success: function(data) {
                                    $('select[name="litre"]').empty();
                                    $.each(data, function(key, value) {
                                        $('select[name="litre"]').append('<option value="' +
                                            value + '">' + value + '</option>');
                                    });
                                },
                            });
                            $.ajax({
                                url: "<?php echo e(URL::to('power')); ?>/" + ModelId,
                                type: "GET",
                                dataType: "json",
                                success: function(data) {
                                    $('select[name="ch"]').empty();
                                    $.each(data, function(key, value) {
                                        $('select[name="ch"]').append('<option value="' +
                                            value + '">' + value + '</option>');
                                    });
                                },
                            });
                        } else {
                            console.log('AJAX load did not work');
                        }
                    });
                });
    </script>
</body>
<!-- END: Body-->

</html><?php /**PATH C:\xampp\htdocs\dzautosql\resources\views/check.blade.php ENDPATH**/ ?>