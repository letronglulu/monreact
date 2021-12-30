<main class="pay">
  <div class="pay-form">
    <form action="index.php?Controller=thongtinthanhtoan&Action=getthongtin" method="post">
      <div class="pay-page">
        <h2>Thông tin liên lạc</h2>
        <div class="pay-left">
          <div class="pay-field">
            <label for="pay-name">Họ tên(<span>*</span>)</label>
            <input type="text" required id="pay-name" name="">
          </div>
          <div class="pay-field">
            <label for="pay-tel">Di động(<span>*</span>)</label>
            <input type="tel" id="pay-tel" required pattern="((09|03|07|08|05)+([0-9]{8})\b)" name="">
          </div>
          <div class="pay-field">
            <label for="pay-address">Địa chỉ</label>
            <input type="text" id="pay-address" name="">
          </div>
          <div class="pay-field">
            <label for="pay-note">Ghi chú</label>
            <input type="text" id="pay-note" name="">
          </div>
        </div>
        <div class="pay-right">
          <div class="pay-field">
            <label for="pay-email">Email(<span>*</span>)</label>
            <input type="email" id="pay-email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="">
          </div>
          <div class="pay-field">
            <label for="pay-phone">Điện thoại</label>
            <input type="tel" id="pay-phone" pattern="((09|03|07|08|05)+([0-9]{8})\b)" name="">
          </div>
          <div class="pay-right-ft">
            <div class="pay-field">
              <label for="nl">Người lớn</label>
              <input type="number" id="nl" value="1" name="">
            </div>
            <div class="pay-field">
              <label for="te">Trẻ em</label>
              <input type="number" id="te" value="0" name="">
            </div>
            <div class="pay-field">
              <label for="tn">Trẻ nhỏ</label>
              <input type="number" id="tn" value="0" name="">
            </div>
            <div class="pay-field">
              <label for="eb">Em bé</label>
              <input type="number" id="eb" value="0" name="">
            </div>
            <div class="pay-field">
              <label for="sk">Số khách</label>
              <input type="number" readonly id="sk" value="1" name="">
            </div>
          </div>
          <div class="sub-cu" style=" width: 100%;
  text-align: center;
  padding: 1vmax;">
            <input type="submit" value="Xác nhận" style="padding: 0.4vmax 1vmax;
  font-size: 0.9vmax;
  font-weight: 600;
  color: white;
  background-color: #df2e1b;
  border: none;
  outline: none;
  border-radius: 0.2vmax;">
          </div>
        </div>
      </div>
    </form>
  </div>
</main>

<style>
  /* Thanh toán */

  main.pay {
    width: 100%;
    height: calc(100vh - 5vmax);
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: url(IMG/krisztian-tabori-KJ1ida5X2hg-unsplash.jpg);
    background-position: center center;
    background-size: cover;
  }

  .pay-form {
    width: 70%;
    padding: 2vmax 1vmax;
    background-color: rgba(245, 245, 245, 0.7);
  }

  .pay-page {
    display: flex;
    flex-wrap: wrap;
  }

  .pay-page h2 {
    width: 100%;
    text-align: center;
    color: #df2e1b;
    font-size: 2vmax;
    margin-bottom: 1vmax;
  }

  .pay-left,
  .pay-right {
    width: 50%;
  }

  .pay-field {
    width: 100%;
    padding: .2vmax .5vmax;
    display: flex;
    flex-wrap: wrap;
  }

  .pay-field label,
  .pay-field input {
    width: 100%;
  }

  .pay-field label {
    font-size: 1.1vmax;
    font-weight: 500;
    margin-bottom: .3vmax;
  }

  .pay-field input {
    outline: none;
    border: .1vmax solid #999;
    height: 2vmax;
    border-radius: .2vmax;
    font-size: 1vmax;
    padding: .5vmax;
  }


  .pay-field label span {
    color: #df2e1b;
  }

  .pay-right-ft {
    display: flex;
  }

  @media screen and (min-width: 600px) {
    .r-footer>* {
      flex: 1;
    }

    .features {
      flex-grow: 2;
    }

    .l-footer {
      flex: 1 0px;
    }

    .r-footer {
      flex: 2 0px;
    }
  }

  @media (max-width: 920px) {
    .hamburger-menu-container {
      display: flex;
    }

    #check {
      display: block;
    }

    .nav-btn {
      position: fixed;
      height: calc(100vh - 5vmax);
      top: 5vmax;
      left: 0;
      width: 100%;
      background-color: rgb(240, 240, 240);
      flex-direction: column;
      align-items: center;
      justify-content: space-between;
      overflow-x: hidden;
      overflow-y: auto;
      transform: translateX(100%);
      transition: 0.65s;
    }

    #check:checked~.nav-btn {
      transform: translateX(0);
    }

    #check:checked~.nav-btn .nav-link,
    #check:checked~.nav-btn .log-sign {
      animation: animation 0.5s ease forwards var(--i);
    }

    .nav-links {
      flex: initial;
      width: 100%;
    }

    .nav-links>ul {
      flex-direction: column;
    }

    .nav-link {
      width: 100%;
      opacity: 0;
      transform: translateY(0.5vmax);
    }

    .nav-link>a {
      font-size: 2vmax;
      line-height: 1;
      padding: 1.6vmax 2vmax;
    }

    .nav-link:hover>a {
      transform: scale(1);
      background-color: rgb(219, 219, 219);
    }

    .dropdown {
      position: initial;
      top: initial;
      left: initial;
      transform: initial;
      opacity: 1;
      pointer-events: auto;
      width: 100%;
      padding: 0;
      background-color: #3183ac;
      display: none;
    }

    .nav-link:hover>.dropdown {
      display: block;
    }

    .nav-link:hover>a>i {
      transform: rotate(360deg);
    }

    .dropdown-link>a {
      background-color: white;
      color: black;
      /* font-weight: bold; */
      font-size: 2vmax;
      padding: 1.2vmax 2vmax;
      line-height: 1;
      padding: 1.2vmax 2vmax 1.2vmax 4vmax;
    }

    .dropdown-link:hover>a {
      background-color: black;
    }

    .nav-link>a>i {
      font-size: 1.5vmax;
      transform: rotate(-90deg);
      transition: 0.7s;
    }

    .btn {
      font-size: 2vmax;
    }

    .log-sign {
      flex: initial;
      width: 100%;
      padding: 4vmax 2vmax;
      justify-content: flex-start;
      opacity: 0;
      transform: translateY(0.5vmax);
    }

    .log-sign ul {
      margin: 0;
    }

    .log-sign ul li a i {
      font-size: 3vmax;
    }

    .log-sign a {
      font-size: 2vmax;
    }

    .sub-cu {
      width: 100%;
      text-align: center;
      padding: 1vmax;
    }

    .sub-cu input[type="submit"] {
      padding: 0.4vmax 1vmax;
      font-size: 0.9vmax;
      font-weight: 600;
      color: white;
      background-color: #df2e1b;
      border: none;
      outline: none;
      border-radius: 0.2vmax;
    }
  }
</style>