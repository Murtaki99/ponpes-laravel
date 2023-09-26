<section>
    <nav class="navbar bg-success fixed-top">
        <div class="container d-flex justify-content-evenly">
            <a href="#dropdown" data-bs-toggle="modal"><i class="bi bi-three-dots-vertical text-light"></i></a>
            <form method="post" action="" class="d-flex col-10 col-md-6" role="search">
                <input class="form-control" id="keyword" type="text" placeholder="pencarian" autocomplete="off">
            </form>
        </div>
    </nav>
    <div class="modal fade" id="dropdown" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-between">
                    <a class="btn btn-primary" href="profile.php" role="button">Profile</a>
                    <a class="btn btn-primary" href="user.php" role="button">Pengguna</a>
                    <a class="btn btn-danger" role="button" href="../login/logout.php"> <i class="bi bi-power"></i>
                        Logout</a>
                </div>
            </div>
        </div>
    </div>
</section>