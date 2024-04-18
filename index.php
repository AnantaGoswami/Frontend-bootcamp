<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frontend Bootcamp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>+-
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand">Frontend bootcamp</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#learn" class="nav-link">What You'll Learn</a>
                    </li>
                    <li class="nav-item">
                        <a href="#questions" class="nav-link">Questions</a>
                    </li>
                    <li class="nav-item">
                        <a href="#instructors" class="nav-link">Instructors</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Showcase-->
    <section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1>Become a <span class="text-warning">Web Developer</span> </h1>
                    <p class="lead my-4">
                        We focus on teaching our students the fundamentals of the latest and greatest technologies to
                        prepare them for their first dev role
                    </p>
                    <button class="btn btn-primary button-lg" data-bs-toggle="modal" data-bs-target="#enroll">Start The
                        Enrollment</button>
                </div>
                <img class="img-fluid w-50 d-none d-sm-block" src="imgs/showcase.svg" alt="">
            </div>
        </div>
    </section>

    <!--Newsletter-->
    <section class="bg-primary text-light p-5">
        <div class="container">
            <div class="d-md-flex align-items-center justify-content-between">
                <h3 class="mb-3 mb-md-0">Sign Up For Newsletter</h3>
                <div class="input-group news-input">
                    <input type="text" class="form-control" placeholder="Enter Email">
                    <button class="btn btn-dark btn-lg" type="button">Sign Up</button>
                </div>
            </div>
        </div>
    </section>

    <!--Boxes-->
    <section class="p-5">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-laptop"></i>
                            </div>
                            <h3 class="card-title">Virtual</h3>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam
                                similique dignissimos delectus molestias facere expedita.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-secondary text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-person-square"></i>
                            </div>
                            <h3 class="card-title">Hybrid</h3>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam
                                similique dignissimos delectus molestias facere expedita.</p>
                            <a href="#" class="btn btn-dark">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-people"></i>
                            </div>
                            <h3 class="card-title">In Person</h3>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam
                                similique dignissimos delectus molestias facere expedita.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Learn Seactions-->
    <section id="learn" class="p-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md">
                    <img src="imgs/fundamentals.svg" class="img-fluid" alt="">
                </div>
                <div class="col-md">
                    <h2>Learn The Fundamentals</h2>
                    <p class="lead">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, perspiciatis impedit. Beatae
                        nulla iste corporis?
                    </p>
                    <p class="lead">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos temporibus reprehenderit deserunt
                        quisquam velit incidunt illum beatae iste id sed perferendis, dignissimos porro eius, in hic
                        voluptates accusantium eligendi repudiandae.
                    </p>
                    <a href="#" class="btn btn-light">
                        <i class="bi bi-chevron-right"></i> Read More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="learn" class="p-5 bg-dark text-light">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md">
                    <h2>Learn React</h2>
                    <p class="lead">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, perspiciatis impedit. Beatae
                        nulla iste corporis?
                    </p>
                    <p class="lead">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos temporibus reprehenderit deserunt
                        quisquam velit incidunt illum beatae iste id sed perferendis, dignissimos porro eius, in hic
                        voluptates accusantium eligendi repudiandae.
                    </p>
                    <a href="#" class="btn btn-light">
                        <i class="bi bi-chevron-right"></i> Read More
                    </a>
                </div>
                <div class="col-md">
                    <img src="imgs/react.svg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <!--Questions-->
    <section id="questions" class="p-5">
        <div class="container">
            <div>
                <h2 class="text-center mb-4">Frequently Asked Questions</h2>
            </div>
            <div class="accordion accordion-flush">
                <!--Q1-->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question1">
                            Where exactly are you located?
                        </button>
                    </h2>
                    <div id="question1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti
                            provident aliquam nobis perspiciatis excepturi alias deleniti quas vel, nulla, voluptatum,
                            explicabo officiis suscipit at laudantium in non et? Dolores laboriosam atque nostrum iste!
                            Neque esse quis ipsa explicabo sit excepturi, aliquam debitis, pariatur nesciunt quia illo
                            exercitationem eos beatae quibusdam.</div>
                    </div>
                </div>
                <!--Q2-->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question2">
                            How much does it cost to attend?
                        </button>
                    </h2>
                    <div id="question2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam
                            repellendus consequatur fuga ad earum consequuntur quam dignissimos at eaque minus iure
                            debitis, velit perferendis et doloribus cupiditate aspernatur rerum natus facilis eius ea
                            voluptatum modi nobis laudantium? Eveniet ipsum maxime, laboriosam in repellendus suscipit?
                            Aliquid hic temporibus libero praesentium unde?</div>
                    </div>
                </div>
                <!--Q3-->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question3">
                            What do i need to know?
                        </button>
                    </h2>
                    <div id="question3" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto
                            beatae nobis ipsum ex rerum sunt placeat nesciunt natus cupiditate ullam officiis sequi
                            ipsam, ab blanditiis ducimus ea quod, consequuntur distinctio voluptatibus tenetur unde?
                            Ratione vero ipsam, quas deleniti alias ad eos magnam repellat delectus, odio cupiditate
                            labore eligendi exercitationem dolor?</div>
                    </div>
                </div>
                <!--Q4-->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question4">
                            How do i sign up?
                        </button>
                    </h2>
                    <div id="question4" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto
                            beatae nobis ipsum ex rerum sunt placeat nesciunt natus cupiditate ullam officiis sequi
                            ipsam, ab blanditiis ducimus ea quod, consequuntur distinctio voluptatibus tenetur unde?
                            Ratione vero ipsam, quas deleniti alias ad eos magnam repellat delectus, odio cupiditate
                            labore eligendi exercitationem dolor?</div>
                    </div>
                </div>
                <!--Q5-->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question5">
                            Do you help me find a job?
                        </button>
                    </h2>
                    <div id="question5" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto
                            beatae nobis ipsum ex rerum sunt placeat nesciunt natus cupiditate ullam officiis sequi
                            ipsam, ab blanditiis ducimus ea quod, consequuntur distinctio voluptatibus tenetur unde?
                            Ratione vero ipsam, quas deleniti alias ad eos magnam repellat delectus, odio cupiditate
                            labore eligendi exercitationem dolor?</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Instructors-->
    <section id="instructors" class="p-5 bg-primary">
        <div class="container">
            <h2 class="text-center text-white">Our Instructors</h2>
            <p class="lead text-center text-white">
                Our all instructors have 5+ years of experience working as a web developer in the industry
            </p>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/men/1.jpg" class="rounded-circle mb-3" alt="">
                            <h3 class="card-title mb-3">John Doe</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. At expedita
                                nisi exercitationem quidem veniam voluptate!</p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/women/1.jpg" class="rounded-circle mb-3"
                                alt="">
                            <h3 class="card-title mb-3">Janie Williams</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. At expedita
                                nisi exercitationem quidem veniam voluptate!</p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/men/2.jpg" class="rounded-circle mb-3" alt="">
                            <h3 class="card-title mb-3">Steve Harvey</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. At expedita
                                nisi exercitationem quidem veniam voluptate!</p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/women/2.jpg" class="rounded-circle mb-3"
                                alt="">
                            <h3 class="card-title mb-3">Sarah Parker</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. At expedita
                                nisi exercitationem quidem veniam voluptate!</p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Contact and Map-->
    <section id="contact" class="p-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md mb-4">
                    <h2 class="text-center">Contact Info</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span class="fw-bold">Main Location:</span> 50 Main Street Boston MA
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Enrollment Phone:</span> (555)555-5555
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Student Phone:</span> (333)333-3333
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Enrollment Email:</span> (555)enroll@frontendbc.test
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Student Email:</span> Student@frontendbc.test
                        </li>
                    </ul>
                </div>
                <div class="col-md mb-4">
                    <!--Map-->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2947.559156886566!2d-71.0644893846773!3d42.373233479186034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e370ed678c5c7b%3A0x1151236a3eb3c8e2!2s50%20Main%20St%2C%20Charlestown%2C%20MA%2002129%2C%20USA!5e0!3m2!1sen!2sin!4v1668268695819!5m2!1sen!2sin"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!--Footer-->
    <footer class="p-5 bg-dark text-white text-center position-relative">
        <div class="container">
            <p class="lead">Copyright &copy; 2022 Frontend Bootcamp</p>
            <!--Go Back Icon-->
            <a href="#" class="position-absolute bottom-0 end-0 p-5">
                <i class="bi bi-arrow-up-circle h1"></i>
            </a>
        </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="enroll" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="enroll_form.php" method="post">
                    <div class="modal-body">
                        <p class="lead">Fill out this form and we will get back to you</p>
                        <div>
                            <label for="first-name" class="col-form-label">First Name</label>
                            <input type="text" name="first_name" class="form-control" id="first_name" />
                        </div>
                        <div>
                            <label for="last-name" class="col-form-label">Last Name</label>
                            <input type="text" name="last_name" class="form-control" id="last_name" />
                        </div>
                        <div>
                            <label for="email" class="col-form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email" />
                        </div>
                        <div>
                            <label for="phone" class="col-form-label">Phone</label>
                            <input type="tel" name="phone" class="form-control" id="phone" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>