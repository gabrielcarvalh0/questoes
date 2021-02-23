<?php 
ob_start();
session_start();
?>
<html lang="en" class="fontawesome-i2svg-active fontawesome-i2svg-complete">

<head>
    <title>Modelo projeto</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Boootstrap Portfolio/Resume Theme for Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">

    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS -->
    <script defer="" src="assets/fontawesome/js/all.js"></script>

    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- github calendar css -->
    <link rel="stylesheet" href="assets/plugins/github-calendar/dist/github-calendar.css">
    <!-- github activity css -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/octicons/2.0.2/octicons.min.css">
    <link rel="stylesheet" href="assets/plugins/github-activity/github-activity-0.1.5.min.css">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">

</head>

<body>
    <div class="container sections-wrapper">
        <div class="row">
            <div class="primary col-lg-12 col-12">
                <section class="about section">
                    <div class="section-inner shadow-sm rounded">
                        <div class="content">
                            <p><?php echo $_SESSION['descricao'] ?></p>
                        </div>
                    </div>
                </section>
            </div>

            <div class="primary col-lg-6 col-12">
                <section class="about section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Gráfico</h2>
                        <div class="content">
                            <canvas class="myBarChart2" width="100%" height="40"></canvas>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

                            <script>
                                var ctx = document.getElementsByClassName("myBarChart2");

                                var chartGraph = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: ["I - Influente", "D - Dominante", "P - Perfeccionista", "E - Estável"],
                                        datasets: [{
                                                label: "Suas personalidades",
                                                data: [<?php echo $_SESSION['in'] ?>, <?php echo $_SESSION['do'] ?>, <?php echo $_SESSION['pe'] ?>, <?php echo $_SESSION['es'] ?>],
                                                borderColor: 'rgba(77,166,253,0.85)',
                                                backgroundColor: '#00d69f'
                                            }

                                        ]
                                    }
                                });
                            </script>
                        </div>
                        <!--//content-->
                    </div>
                    <!--//section-inner-->
                </section>

            </div>

            <!--//primary-->
            <div class="secondary col-lg-6 col-12">
                <aside class="info aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading sr-only">Basic Information</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Perfil Comportamental</th>
                                            <th scope="col">Resultadp</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Perfil Predominante</td>
                                            <td>I - Influente</td>

                                        </tr>
                                        <tr>
                                            <td>Perfil Adaptativo</td>
                                            <td>C - Conforme</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h6>Resumo do perfil predominante + adaptativo</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident impedit laborum sapiente magni, vitae eaque, amet laboriosam iste, harum porro minus rerum perferendis voluptates magnam alias beatae quaerat maxime voluptas.</p>
                            </ul>
                        </div>
                        <!--//content-->
                    </div>
                    <!--//section-inner-->
                </aside>
                <!--//aside-->
            </div>
            <!--//secondary-->

            <div class="col-lg-12">
                <section class="about section">
                    <div class="section-inner shadow-sm rounded">
                        <h6 class="text-center">Perfil Predominante (principal)</h6>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Pontos Positivos</th>
                                    <th scope="col">Pontos Limitantes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem iste optio similique tenetur in cumque hic, velit modi tempora consequatur rerum, ipsum impedit quam facilis rem atque soluta explicabo assumenda!</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, labore autem delectus perspiciatis beatae, porro vitae quo iusto aspernatur sint, illo nesciunt quos. Sunt blanditiis quis cumque sequi voluptas voluptate!</td>
                                </tr>
                            </tbody>
                        </table>
                        <h6 class="text-center">Perfil Adaptativo</h6>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Pontos Positivos</th>
                                    <th scope="col">Pontos Limitantes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem iste optio similique tenetur in cumque hic, velit modi tempora consequatur rerum, ipsum impedit quam facilis rem atque soluta explicabo assumenda!</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, labore autem delectus perspiciatis beatae, porro vitae quo iusto aspernatur sint, illo nesciunt quos. Sunt blanditiis quis cumque sequi voluptas voluptate!</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
        <!--//row-->
    </div>
    <!--//masonry-->

    <!-- ******FOOTER****** -->
    <footer class="footer">
        <div class="container text-center">
            <!--/* This template is free as long as you keep the attribution link below. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
            <small class="copyright">by <a href="#">Rafael</a> <svg class="svg-inline--fa fa-heart fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                    <path fill="currentColor" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
                    </path>
                </svg><!-- <i class="fas fa-heart"></i> Font Awesome fontawesome.com --> </small>
        </div>
        <!--//container-->
    </footer>
    <!--//footer-->

    <!-- Javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="assets/plugins/popper.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-rss/dist/jquery.rss.min.js"></script>
    <!-- github calendar plugin -->
    <script type="text/javascript" src="assets/plugins/github-calendar/dist/github-calendar.min.js"></script>
    <!-- github activity plugin -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.2/mustache.min.js"></script>
    <script type="text/javascript" src="assets/plugins/github-activity/github-activity-0.1.5.min.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="assets/js/main.js"></script>



</body>

</html>