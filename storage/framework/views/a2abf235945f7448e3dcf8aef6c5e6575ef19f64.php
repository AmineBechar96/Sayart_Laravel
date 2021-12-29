<div>
    <div class="content-body">
        <!-- Search Bar -->
        <section id="search-bar">
            <div class="search-bar">
                <form>
                    <fieldset class="form-group position-relative has-icon-left">
                        <input type="text" class="form-control round" id="searchbar" placeholder="Search here"
                            wire:click="searchagency()" wire:model="search">
                        <div class="form-control-position">
                            <i class="feather icon-search px-1"></i>
                        </div>
                    </fieldset>
                </form>
            </div>

            <div class="row search-result-info mt-2 mb-1">
                <div class="col-sm-8 float-left">
                    <p class="mt-1">Approx <?php echo e($total); ?> resultas</p>
                </div>
                <div class="col-sm-4 float-right text-sm-right">
                    <div class="btn-group">
                        <div class="dropdown">
                            <fieldset class="form-group">
                                <select class="custom-select" id="dateOfNews" wire:model="dateOfNews">
                                    <option class="dropdown-item" value="any">Tous</option>
                                    <option class="dropdown-item" value="yesterday">Dernières 24 heures</option>
                                    <option class="dropdown-item" value="lastweek">Semaine Passée
                                    </option>
                                    <option class="dropdown-item" value="lastmonth">Mois Passé</option>
                                    <option class="dropdown-item" value="lastyear">Année passé</option>
                                </select>
                            </fieldset>




                        </div>
                    </div>
                </div>
        </section>
        <!-- Search Bar end -->
        <!-- Search Form  -->
        <section id="search-website">
            <div class="row">
                <div class="col-md-8 col-12 order-1 order-md-1">
                    <div class="card">
                        <div class="card-content">
                            <!--Search Result-->
                            <div id="search-results" class="card-body pb-0">
                                <section id="card-caps">
                                    <?php if(count($news)>0): ?>
                                    <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="row match-height">
                                        <div class="col-xl-12 col-md-6">
                                            <div class="card">
                                                <div class="card-header mb-2">
                                                    <div>
                                                        <h5 class=""><?php echo e($article->titre); ?></h5>

                                                        <span class="text-primary"><?php echo e($article->source); ?></span>
                                                    </div>
                                                </div>
                                                <div class="card-content match-width">
                                                    <?php if(!is_null($article->image)): ?>
                                                    <img class="img-fluid" src="<?php echo e($article->image); ?>"
                                                        alt="Card image cap">
                                                    <?php else: ?>
                                                    <img class="img-fluid"
                                                        src="../../../app-assets/images/pages/location/news.jpg"
                                                        alt="img-placeholder">
                                                    <?php endif; ?>
                                                    <div class="card-body">
                                                        <p class="card-text">
                                                            <?php if(!is_null($article->contenu)): ?>
                                                            <?php echo e(Str::limit($article->contenu, 180, $end='.......')); ?></p>
                                                        <?php else: ?>
                                                        <?php echo e(Str::limit($article->contenu2, 180, $end='.......')); ?></p>
                                                        <?php endif; ?>

                                                    </div>
                                                </div>
                                                <div class="card-footer text-muted">
                                                    <span class="float-left"><?php echo e($article->date); ?></span>
                                                    <span class="float-right">
                                                        <a href="<?php echo e($article->url); ?>" class="card-link">Afficher Plus <i
                                                                class="fa fa-angle-right"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                    <?php else: ?>


                                    <!-- error 404 -->
                                    <section class="row flexbox-container">
                                        <div class="col-xl-12 col-md-12 col-12 d-flex justify-content-center">
                                            <div class="card auth-card bg-transparent shadow-none rounded-0 mb-0 w-100">
                                                <div class="card-content">
                                                    <div class="card-body text-center">
                                                        <img src="../../../app-assets/images/pages/location/nocontent.svg"
                                                            class="img-fluid align-self-center" alt="branding logo">
                                                        <h1 class="font-large-2 my-1">Oups -No Content
                                                            Found!</h1>
                                                        <p class="p-2">
                                                            Nous sommes désolés, il n'y a pas de contenu disponible,
                                                            vous pouvez consulter les autres Rubriques qui
                                                            appartiennent aux périodes précédentes
                                                        </p> <br>
                                                        <h3>Ou</h3>
                                                        <a class="btn btn-primary btn-lg mt-2"
                                                            href="index.html">Retourner vers Accueil</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- error 404 end -->


                                    <?php endif; ?>


                                </section>
                            </div>
                        </div>
                    </div>

                    <!-- Search Pagination -->
                    <div class="search-pagination text-center">

                        <?php echo e($news->links('')); ?>


                    </div>
                    <!-- Search Pagination end -->
                </div>
                <div class="col-md-4 col-12 order-2 order-md-2">
                    <div class="card">
                        <div class="card-body">


                            <section id="card-caps">
                                <div class="row match-height">
                                    <div class="col-xl-12 col-md-12 col-sm-12">
                                        <div class="card">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <h4 class="card-title">Rubriques connexes</h4>
                                                    <p class="card-text">Voici quelques articles similaires de
                                                        différentes revues traitant du même sujet.
                                                    </p>
                                                </div>
                                                <ul class="list-group list-group-flush">

                                                    <?php $__currentLoopData = $news2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $art): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="d-flex list-group-item">
                                                        <?php if(!is_null($art->image)): ?>
                                                        <img class="img-fluid" width="155" height="100"
                                                            src="<?php echo e($art->image); ?>" alt="Card image cap">
                                                        <?php else: ?>
                                                        <img class="img-fluid"
                                                            src="../../../app-assets/images/pages/location/news.jpg"
                                                            width="150" height="100" alt="img-placeholder">
                                                        <?php endif; ?>

                                                        <div class="d-flex flex-column pl-1">
                                                            <h6 class="">
                                                                <?php echo e(Str::limit($art->titre, 18, $end='.......')); ?></h6>
                                                            <?php if(!is_null($art->contenu)): ?> <p
                                                                style="margin-bottom:auto;">

                                                                <?php echo e(Str::limit($art->contenu, 50, $end='.......')); ?></p>
                                                            <?php else: ?>
                                                            <p style="margin-bottom:auto;">
                                                                <?php echo e(Str::limit($art->contenu2, 50, $end='.......')); ?>

                                                            </p><?php endif; ?>
                                                            <a href="<?php echo e($art->url); ?>" class="card-link">Afficher Plus</a>
                                                        </div>



                                                    </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                                </ul>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
    </div>
</div><?php /**PATH D:\projet\dzautosql-3.0\resources\views/livewire/news-section.blade.php ENDPATH**/ ?>