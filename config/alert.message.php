<?php
session_start();

function ErrorMessage() {
    if(isset($_SESSION['error'])){
        $output = '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
        $output .= htmlentities($_SESSION['error']);
        $output .= '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
        $output .= '</div>';

        $_SESSION['error'] = null;

        return $output;
    }
}

function SuccessMessage() {
    if(isset($_SESSION['success'])){
        $output = '<div class="alert alert-success alert-dismissible fade show" role="alert">';
        $output .= htmlentities($_SESSION['success']);
        $output .= '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
        $output .= '</div>';

        $_SESSION['success'] = null;

        return $output;
    }
}