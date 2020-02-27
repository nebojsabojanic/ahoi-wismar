<section class="table">
                          
                            <div class="grid-960">

                                <h2>SPECIFIKACIJE THERAPY AIR iOn UREĐAJA</h2>


                                <?php $table = get_field( 'table' );

                                if ( ! empty ( $table ) ) {

                                echo '<table class="table">';

                                        if ( ! empty( $table['caption'] ) ) {

                                        echo '<caption>' . $table['caption'] . '</caption>';
                                        }

                                        if ( ! empty( $table['header'] ) ) {

                                        echo '<thead>';

                                                echo '<tr>';

                                                foreach ( $table['header'] as $th ) {

                                                        echo '<th class="table__heading">';
                                                        echo $th['c'];
                                                        echo '</th>';
                                                }

                                                echo '</tr>';

                                        echo '</thead>';
                                        }

                                        echo '<tbody>';

                                        foreach ( $table['body'] as $tr ) {

                                                echo '<tr>';

                                                foreach ( $tr as $td ) {

                                                        echo '<td class="table__data">';
                                                        echo $td['c'];
                                                        echo '</td>';
                                                }

                                                echo '</tr>';
                                        }

                                        echo '</tbody>';

                                echo '</table>';
                                }?>
                                                            
                            </div>
                           

                    
                     </section>

