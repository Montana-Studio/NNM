<?php
    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    $nombresdias = array("Lun", "Mar", "Mie", "Jue", "Vie", "Sab", "Dom");
    $today = getdate();
    
    $meses_ahead = 6; // Numero de meses a mostrar a partir del actual
 ?>
<div class="agenda-outer">
<div id="agenda" class="flexslider">
        <ul class="agenda-inner slides">
        
            <?php 
            
                $anho = $today['year'];
                $mes = $today['mon'];
                $dia = $today['mday'];
            
            for( $i = 0; $i <= $meses_ahead; $i++) { ?>
            
                <?php
                    
                    $meta_query_args = array(
                            array(
                                'key' => 'anho-agenda',
                                'compare' => '=',
                                'value' => $anho,
                                'type' => 'NUMERIC'
                            ),
                             array(
                                'key' => 'mes-agenda',
                                'compare' => '=',
                                'value' => $mes,
                                'type' => 'NUMERIC'
                            )
                        );
                    
                    if( $mes == $today['mon']) {
                        $meta_query_args[2] = array(
                            	'key' => 'dia-agenda',
                            	'compare' => '>=',
                            	'value' => $dia,
                            	'type' => 'NUMERIC'
                        );
                    }
                    
                    $args = array(
                        'category_name' => 'agenda',
                        'post_status' => array( 'publish', 'future' ),
                        'posts_per_page' => -1,
        
                        'meta_query' => $meta_query_args,
        
                        'meta_key' => 'dia-agenda', // name of custom field
                        'orderby' => 'meta_value',
                        'order' => 'ASC'
                       
                    );
                    $agenda = new WP_Query($args); ?>
                    <li class="caja-mes">
                        <div class="titulo">
                            <span class="sub">Agenda NNM</span>
                            <span class="mes"><?php echo $meses[$mes - 1] ?></span>
                        </div>
    
                   <?php if($agenda->have_posts()) : ?>
                   
                    <div class="cont-agenda">
                    
                        <?php while($agenda->have_posts()): $agenda->the_post(); ?>
                                <?php 
                                    $fecha = DateTime::createFromFormat('Y-m-d', get_field('fecha'));
                                    $numdia = $fecha->format('N');
                                ?>
                    
                        <div class="cont-event">
                            <a href="<?php the_permalink(); ?>">
                                <div class="dia">
                                    <span class="nombre"><?php echo $nombresdias[intval($numdia)-1]; ?></span>
                                    <span class="numero"><?php echo $fecha->format('d'); ?></span>
                                </div>
                                <div class="evento">
                                    <span class="nombre"><?php the_field('show') ?></span>
                                    <span class="lugar"><i class="fa fa-map-marker"></i> <?php the_field('ubicación') ?></span>
                                </div>
                                <?php if (get_field('concurso')): ?>
                                    <span class="concurso">Concurso</span>
                                <?php endif; ?>
                                
                            </a>
                        </div>
            
         
                        <?php endwhile;?>
                    
                    </div>
                    <?php else: ?>
                    
                        <p class="no-events"> No hay eventos para <?php echo $meses[$mes-1]; ?></p>

                    <?php endif;
                    wp_reset_query(); ?>
                
                
                    </li><!-- .caja-mes -->
            <?php
                $anho = ($mes == 12) ? $anho + 1  : $anho;
                $mes = ($mes == 12) ? 1 : $mes + 1 ;
            
            } ?>

    </ul><!-- .agenda-inner -->
</div><!-- #agenda -->

</div><!-- outer agenda -->