<?php 
add_action( 'send_headers', 'add_csp_headers' ); function add_csp_headers() { 
    header( "Content-Security-Policy: default-src 'self' "); 
  }