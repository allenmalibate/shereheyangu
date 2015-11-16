<!-- Footer -->
<?php if(!($this->session->has_userdata('userId'))) :?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-inline">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a href="#about">FAQ</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a href="#services">Services</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a href="#contact">About Us</a>
                    </li>
                </ul>
                <p class="copyright text-muted small">Copyright &copy; Allen Media LTD 2015. All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>
<?php endif ?>

<!-- jQuery -->
<script src="<?php echo base_url();?>js/jquery.js"></script>

<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="<?php echo base_url();?>js/classie.js"></script>
<script src="<?php echo base_url();?>js/cbpAnimatedHeader.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>



</body>

</html>
