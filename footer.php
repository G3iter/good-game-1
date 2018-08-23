    <!-- Copyright -->
    <div class="agilefooterbottom">
        <div class="copyright">
            <p>© 2018 Good Game. All Rights Reserved | Design by
                <a href="https://i.pinimg.com/originals/89/ec/77/89ec77ca8413d534cc6c28fb4de011f6.jpg" target="=_blank"> Unknown gamer</a>
            </p>
        </div>
    </div>


    <!-- Login Modal -->
    <div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login / Sign up</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="#" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required name="login-email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" required name="login-password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Login</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Cart Modal -->
    <div class="modal fade" id="cart_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Your cart</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <h2>You currently have these items in your cart:</h2>
            <?php if (isset($_SESSION['games'])) : ?>
                <ul class="list-group">
                    <?php foreach ($_SESSION['games'] as $key => $game) : ?>
                        <li class="list-group-item"><?php echo $game; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php else : ?>
                <h3>You don't have any items selected.</h3>
            <?php endif; ?>
        </div>
            <div class="modal-footer">
                <form action="#" method="POST">
                    <button type="submit" class="btn btn-danger" name="clear-cart">Clear cart</button>
                </form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
      </div>
    </div>

    <script src="https://unpkg.com/ionicons@4.1.2/dist/ionicons.js"></script>
    <script src="./assets/js/modules/toggleClass.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>