        <?php if( $contain == true ) { ?>
            </div> <!-- /.contain -->
        <?php } ?>
            
         </main> <!-- /.main -->

            <?php if( $contain ) { ?>
                </div> <!-- /.contain -->
            <?php } ?>

        </main> <!-- /.main -->
        
        <footer class="footer">
            <div class="contain">
                <h3>Connect with the sky...</h3>
                <div class="footer__widgets">
                    <?php printWidget('Contact', '

                        <p>123 Blackhole Lane, The Universe<br>
                        (888) 234-6654<br>
                        blue@sky.com</p>'); ?>

                    <?php printWidget('Friends', '
                        <ul>
                            <li>Monica</li>
                            <li>Chandler</li>
                            <li>Rachel</li>
                            <li>Ross</li>
                            <li>Phoebe</li>
                            <li>Joey</li>
                        </ul>
                    '); ?>

                    <?php printWidget('Receive Sky Updates', '
                        <input type="email" placeholder="Your email">
                        <input type="submit" value="Sign up!">
                    '); ?>
                </div>
            </div>
        </footer>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="assets/js/build/production.min.js"></script>

        <script>
            // Analytics here, sweetie
        </script>
    </body>