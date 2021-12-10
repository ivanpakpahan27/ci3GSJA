<html>

<head>
    <title>GSJA Pemuridan</title>
    <!-- <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css"> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="http://cdn.ckeditor.com/4.5.11/full/ckeditor.js"></script>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="logo-web" href="#"><img src="<?php echo base_url(); ?>assets/images/logo/Logo-GSJA-bolong.png" alt="Logo"></a>
                <a class="navbar-brand" href="<?php echo base_url(); ?>">Pemuridan</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url(); ?>">Beranda</a></li>
                <li><a href="<?php echo base_url(); ?>about">Tentang</a></li>
                <li><a href="<?php echo base_url(); ?>posts">Postingan</a></li>
                <li><a href="<?php echo base_url(); ?>activity">Kegiatan</a></li>
                <li><a href="<?php echo base_url(); ?>gallery">Galeri</a></li>
                <li><a href="<?php echo base_url(); ?>categories">Kategori</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if (!$this->session->userdata('logged_in')) : ?>
                    <li><a href="<?php echo base_url(); ?>users/login"><button>Login</button></a></li>
                    <!-- <li><a href="<?php echo base_url(); ?>users/register">Daftar</a></li> -->
                <?php endif; ?>
                <?php if ($this->session->userdata('logged_in')) : ?>
                    <li><a href="<?php echo base_url(); ?>posts/create"><button>Buat Post</button></a></li>
                    <li><a href="<?php echo base_url(); ?>categories/create"><button>Buat Kategori</button></a></li>
                    <li><a href="<?php echo base_url(); ?>users/logout"><button>Keluar</button></a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
    <div class="container">
        <!-- Flash messages -->
        <?php if ($this->session->flashdata('user_registered')) : ?>
            <?php echo '<p class="alert alert-success">' . $this->session->flashdata('user_registered') . '</p>'; ?>
        <?php endif; ?>

        <?php if ($this->session->flashdata('post_created')) : ?>
            <?php echo '<p class="alert alert-success">' . $this->session->flashdata('post_created') . '</p>'; ?>
        <?php endif; ?>

        <?php if ($this->session->flashdata('post_updated')) : ?>
            <?php echo '<p class="alert alert-success">' . $this->session->flashdata('post_updated') . '</p>'; ?>
        <?php endif; ?>

        <?php if ($this->session->flashdata('category_created')) : ?>
            <?php echo '<p class="alert alert-success">' . $this->session->flashdata('category_created') . '</p>'; ?>
        <?php endif; ?>

        <?php if ($this->session->flashdata('post_deleted')) : ?>
            <?php echo '<p class="alert alert-success">' . $this->session->flashdata('post_deleted') . '</p>'; ?>
        <?php endif; ?>

        <?php if ($this->session->flashdata('login_failed')) : ?>
            <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('login_failed') . '</p>'; ?>
        <?php endif; ?>

        <?php if ($this->session->flashdata('user_loggedin')) : ?>
            <?php echo '<p class="alert alert-success">' . $this->session->flashdata('user_loggedin') . '</p>'; ?>
        <?php endif; ?>

        <?php if ($this->session->flashdata('user_loggedout')) : ?>
            <?php echo '<p class="alert alert-success">' . $this->session->flashdata('user_loggedout') . '</p>'; ?>
        <?php endif; ?>

        <?php if ($this->session->flashdata('category_deleted')) : ?>
            <?php echo '<p class="alert alert-success">' . $this->session->flashdata('category_deleted') . '</p>'; ?>
        <?php endif; ?>