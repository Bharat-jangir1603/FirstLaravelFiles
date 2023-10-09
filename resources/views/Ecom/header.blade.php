<div class="head">
    <div class="H_Links container">
        <a href="/" class="Logo">L-Drive</a>
        <div class="Search"><form>
            @csrf
            &#128269<input type="text" id="search_inp" placeholder="Search...">
        </form>
        </div>
        <div class="Cart_link">
            <a href="login" class="@php echo $data['login']??'black' @endphp">Login</a>
            <a href="signup" class="@php echo $data['signup']??'black' @endphp">Signup</a>
            <a href="main" class="@php echo $data['file']??'black' @endphp">Files</a>
            <a href="logout">Logout</a>            
        </div>
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">&#9776;</button>
            <div id="myDropdown" class="dropdown-content">
              <a href="/" style="margin-left: 0;">Home</a>
              <a href="login" style="margin-left: 0;">Login</a>
              <a href="signup" style="margin-left: 0;">Signup</a>
              <a href="main" style="margin-left: 0;">Files</a>
              <a href="logout" style="margin-left: 0;">Logout</a>
            </div>
        </div>
    </div>
</div>