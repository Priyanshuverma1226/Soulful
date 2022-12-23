<!-- Modal -->
<div class="modal fade" id="Signup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Signup</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="functions/login/signup.php" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="phone_number" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Number</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">SIgn Up Now</button>
            </div>
        </div>

        </form>
    </div>
</div>