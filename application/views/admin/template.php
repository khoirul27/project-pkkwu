<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="<?= base_url('aset/constra/theme/') ?>images/logo.png">
    <title>Atmos | Admin</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="<?= base_url('aset/temadmin/') ?>css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="<?= base_url('aset/temadmin/') ?>css/feather.css">
    <link rel="stylesheet" href="<?= base_url('aset/temadmin/') ?>css/select2.css">
    <link rel="stylesheet" href="<?= base_url('aset/temadmin/') ?>css/dropzone.css">
    <link rel="stylesheet" href="<?= base_url('aset/temadmin/') ?>css/uppy.min.css">
    <link rel="stylesheet" href="<?= base_url('aset/temadmin/') ?>css/jquery.steps.css">
    <link rel="stylesheet" href="<?= base_url('aset/temadmin/') ?>css/jquery.timepicker.css">
    <link rel="stylesheet" href="<?= base_url('aset/temadmin/') ?>css/quill.snow.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="<?= base_url('aset/temadmin/') ?>css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="<?= base_url('aset/temadmin/') ?>css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="<?= base_url('aset/temadmin/') ?>css/app-dark.css" id="darkTheme" disabled>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
</head>

<body class="vertical  light  ">
    <div class="wrapper">
        <nav class="topnav navbar navbar-light">
            <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
                <i class="fe fe-menu navbar-toggler-icon"></i>
            </button>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
                        <i class="fe fe-sun fe-16"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <aside class="sidebar-left border-right bg-white shadow " id="leftSidebar" data-simplebar>
            <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
                <i class="fe fe-x"><span class="sr-only"></span></i>
            </a>
            <nav class="vertnav navbar navbar-light">
                <!-- nav bar -->
                <div class="w-100 mt-5 d-flex">
                    <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
                        <img src="<?= base_url('aset/constra/theme/') ?>images/logo.png" width="50" alt="">
                    </a>
                </div>

                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Menu</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item">
                        <a href="<?= base_url('admin/about/') ?>" aria-expanded="false" class="nav-link">
                            <i class="fe fe-user fe-16"></i>
                            <span class="ml-3 item-text">About us</span>
                        </a>
                        <a href="<?= base_url('admin/barang/') ?>" aria-expanded="false" class="nav-link">
                            <i class="fe fe-6 fe-truck"></i>
                            <span class="ml-3 item-text">Barang</span>
                        </a>
                        <a href="<?= base_url('admin/galeri/') ?>" aria-expanded="false" class="nav-link">
                            <i class="fe fe-columns fe-16"></i>
                            <span class="ml-3 item-text">Galeri</span>
                        </a>
                        <a href="<?= base_url('admin/konfigurasi/') ?>" aria-expanded="false" class="nav-link">
                            <i class="fe fe-file-text fe-16"></i>
                            <span class="ml-3 item-text">Konfigurasi</span>
                        </a>
                    </li>
                </ul>
                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Setting</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item dropdown">
                        <a href="#profile" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                            <i class="fe fe-key fe-16"></i>
                            <span class="ml-3 item-text">Admin</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="profile">
                            <a class="nav-link pl-3" href="<?= base_url('admin/admin') ?>"><span class="ml-1">Registrasi</span></a>
                            <a class="nav-link pl-3" href="<?= base_url('admin/auth/logout') ?>"><span class="ml-1">Log out</span></a>
                            <a class="nav-link pl-3" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><span class="ml-1">Ubah password</span></a>
                        </ul>
                    </li>
                </ul>
            </nav>
        </aside>



        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ubah password</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('admin/auth/ubah_password') ?>" method="post">
                            <input name="username" type="hidden" value="<?= $this->session->userdata('username') ?>">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">password lama :</label>
                                <input type="password" name="password_lama" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">password baru :</label>
                                <input type="password" name="password_baru" class="form-control" id="recipient-name">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <main role="main" class="main-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="row align-items-center mb-2">
                            <div class="col">
                                <h2 class="h5 page-title">Sugeng rawuh!</h2>
                            </div>
                        </div>
                        <div id='myAlert'>
                            <?= $this->session->flashdata('alert', true) ?>
                        </div>
                        <?php echo $contents; ?>
        </main> <!-- main -->
    </div> <!-- .wrapper -->
    <script src="<?= base_url('aset/temadmin/') ?>js/jquery.min.js"></script>
    <script src="<?= base_url('aset/temadmin/') ?>js/popper.min.js"></script>
    <script src="<?= base_url('aset/temadmin/') ?>js/moment.min.js"></script>
    <script src="<?= base_url('aset/temadmin/') ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('aset/temadmin/') ?>js/simplebar.min.js"></script>
    <script src='<?= base_url('aset/temadmin/') ?>js/daterangepicker.js'></script>
    <script src='<?= base_url('aset/temadmin/') ?>js/jquery.stickOnScroll.js'></script>
    <script src="<?= base_url('aset/temadmin/') ?>js/tinycolor-min.js"></script>
    <script src="<?= base_url('aset/temadmin/') ?>js/config.js"></script>
    <script src="<?= base_url('aset/temadmin/') ?>js/d3.min.js"></script>
    <script src="<?= base_url('aset/temadmin/') ?>js/topojson.min.js"></script>
    <script src="<?= base_url('aset/temadmin/') ?>js/datamaps.all.min.js"></script>
    <script src="<?= base_url('aset/temadmin/') ?>js/datamaps-zoomto.js"></script>
    <script src="<?= base_url('aset/temadmin/') ?>js/datamaps.custom.js"></script>
    <script src="<?= base_url('aset/temadmin/') ?>js/Chart.min.js"></script>
    <script>
        /* defind global options */
        Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
        Chart.defaults.global.defaultFontColor = colors.mutedColor;
    </script>
    <script src="<?= base_url('aset/temadmin/') ?>js/gauge.min.js"></script>
    <script src="<?= base_url('aset/temadmin/') ?>js/jquery.sparkline.min.js"></script>
    <script src="<?= base_url('aset/temadmin/') ?>js/apexcharts.min.js"></script>
    <script src="<?= base_url('aset/temadmin/') ?>js/apexcharts.custom.js"></script>
    <script src='<?= base_url('aset/temadmin/') ?>js/jquery.mask.min.js'></script>
    <script src='<?= base_url('aset/temadmin/') ?>js/select2.min.js'></script>
    <script src='<?= base_url('aset/temadmin/') ?>js/jquery.steps.min.js'></script>
    <script src='<?= base_url('aset/temadmin/') ?>js/jquery.validate.min.js'></script>
    <script src='<?= base_url('aset/temadmin/') ?>js/jquery.timepicker.js'></script>
    <script src='<?= base_url('aset/temadmin/') ?>js/dropzone.min.js'></script>
    <script src='<?= base_url('aset/temadmin/') ?>js/uppy.min.js'></script>
    <script src='<?= base_url('aset/temadmin/') ?>js/quill.min.js'></script>
    <script>
        $('.select2').select2({
            theme: 'bootstrap4',
        });
        $('.select2-multi').select2({
            multiple: true,
            theme: 'bootstrap4',
        });
        $('.drgpicker').daterangepicker({
            singleDatePicker: true,
            timePicker: false,
            showDropdowns: true,
            locale: {
                format: 'MM/DD/YYYY'
            }
        });
        $('.time-input').timepicker({
            'scrollDefault': 'now',
            'zindex': '9999' /* fix modal open */
        });
        /** date range picker */
        if ($('.datetimes').length) {
            $('.datetimes').daterangepicker({
                timePicker: true,
                startDate: moment().startOf('hour'),
                endDate: moment().startOf('hour').add(32, 'hour'),
                locale: {
                    format: 'M/DD hh:mm A'
                }
            });
        }
        var start = moment().subtract(29, 'days');
        var end = moment();

        function cb(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);
        cb(start, end);
        $('.input-placeholder').mask("00/00/0000", {
            placeholder: "__/__/____"
        });
        $('.input-zip').mask('00000-000', {
            placeholder: "____-___"
        });
        $('.input-money').mask("#.##0,00", {
            reverse: true
        });
        $('.input-phoneus').mask('(000) 000-0000');
        $('.input-mixed').mask('AAA 000-S0S');
        $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
            translation: {
                'Z': {
                    pattern: /[0-9]/,
                    optional: true
                }
            },
            placeholder: "___.___.___.___"
        });
        // editor
        var editor = document.getElementById('editor');
        if (editor) {
            var toolbarOptions = [
                [{
                    'font': []
                }],
                [{
                    'header': [1, 2, 3, 4, 5, 6, false]
                }],
                ['bold', 'italic', 'underline', 'strike'],
                ['blockquote', 'code-block'],
                [{
                        'header': 1
                    },
                    {
                        'header': 2
                    }
                ],
                [{
                        'list': 'ordered'
                    },
                    {
                        'list': 'bullet'
                    }
                ],
                [{
                        'script': 'sub'
                    },
                    {
                        'script': 'super'
                    }
                ],
                [{
                        'indent': '-1'
                    },
                    {
                        'indent': '+1'
                    }
                ], // outdent/indent
                [{
                    'direction': 'rtl'
                }], // text direction
                [{
                        'color': []
                    },
                    {
                        'background': []
                    }
                ], // dropdown with defaults from theme
                [{
                    'align': []
                }],
                ['clean'] // remove formatting button
            ];
            var quill = new Quill(editor, {
                modules: {
                    toolbar: toolbarOptions
                },
                theme: 'snow'
            });
        }
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <script>
        var uptarg = document.getElementById('drag-drop-area');
        if (uptarg) {
            var uppy = Uppy.Core().use(Uppy.Dashboard, {
                inline: true,
                target: uptarg,
                proudlyDisplayPoweredByUppy: false,
                theme: 'dark',
                width: 770,
                height: 210,
                plugins: ['Webcam']
            }).use(Uppy.Tus, {
                endpoint: 'https://master.tus.io/files/'
            });
            uppy.on('complete', (result) => {
                console.log('Upload complete! We’ve uploaded these files:', result.successful)
            });
        }
    </script>
    <script src="<?= base_url('aset/temadmin/') ?>js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');
    </script>
    <script>
        new DataTable('#example');
    </script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
    <script>
    // Fungsi untuk menyembunyikan alert setelah beberapa detik
    function hideAlert() {
        var alertDiv = document.getElementById('myAlert');
        alertDiv.style.display = 'none';
    }

    // Panggil fungsi hideAlert() setelah 3000 milidetik (3 detik)
    setTimeout(hideAlert, 3000);
</script>
</body>

</html>