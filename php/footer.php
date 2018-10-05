
    <style>
        .debate-create{
            background-color: white;
            width:30%;
            height:300px;
            padding:35px;
            text-align:center;
            margin:auto;
            border:none;
            border-radius:5px;
            box-shawdow: 0px 1px 1px 1px rgb(182, 192, 192);

        }
        h1{
            margin-top: -25px;
        }
        .input{
            width: 70%;
            padding: 5px;
            margin:1px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            padding-left: 15px;
            border: none;
            border-radius:2px;
            box-shadow: 0px 1px 1px 1px rgb(182, 192, 192);
        }
        p{
            font-weight:bold;
        }
        .userinput{
            width: 70%;
            padding: 5px;
            margin:none;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            padding-left: 15px;
            border: none;
            border-radius:2px;
            box-shadow: 0px 1px 1px 1px rgb(182, 192, 192);
        }
        .submit-input{
            width:75%;
            height:40px;
            padding:10px;
            margin:10px;
            background-color: #2b5876;
            color:white;
            font-weight:bold;
        }
        .close{
            position:absolute;
            top:0px;
            right:30px;
            cursor: pointer;
            transform: rotate(45deg);
            font-size:100px;
            color:white;
            font:weight:bold;
        }
        
        .debatediv
        {
            display:none;
            position:fixed;
            padding:150px 0 0 0;
            background-color:  rgba(0, 0, 0, 0.9);
            width:100%;
            height:100%;
            z-index:1;
            overflow:auto;
            top:0;
            left:0;
        }

        .animate {
            animation: zoom 0.6s
        }
        @keyframes zoom {
            from {transform: scale(0)} 
            to {transform: scale(1)}
        }


.squaddiv{
    width:30%;
    height:250px; 
    padding:35px;
    text-align: center;
    background-color: white;
    margin:auto;
    border-radius: 5px;
    border:none;
    box-shadow: 0px 1px 1px 1px rgb(182, 192, 192);
 }
 .input{
    
    width: 70%;
    padding: 5px;
    margin:4px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    padding-left: 15px;
    border: none;
    border-radius:2px;
    box-shadow: 0px 1px 1px 1px rgb(182, 192, 192);
 }
 .submit-input{
     width:75%;
     height:40px;
     padding:5px;
     margin:25px;
     background-color: #46718d;
     color:white;
     font-weight:bold;
 }
 .block
{
    display:none;
    position:fixed;
    padding:150px 0 0 0;
    background-color:  rgba(0, 0, 0, 0.9);
    width:100%;
    height:100%;
    z-index:1;
    overflow:auto;
    top:0;
    left:0;
}
 .squadclass{
    background-color: white;    
    width:30%;
    height:250px;
    padding:35px;
    text-align: center;
    margin:auto;
    border-radius: 5px;
    border:none;
    box-shadow: 0px 1px 1px 1px rgb(182, 192, 192);
    position: relative;
}

img{
    height:80px;
    width:80px;  
}
    </style>    


    <script>
            function show() {
                document.getElementById('disp').style.display = 'block';
            }
            function show2() {
                document.getElementById('disp').style.display = 'none';
                document.getElementById('disp2').style.display = 'block';
            }
            function show3() {
                document.getElementById('disp2').style.display = 'none';
                document.getElementById('disp3').style.display = 'block';
            }

            function hide() {
                document.getElementById('disp').style.display = 'none';
                document.getElementById('disp2').style.display = 'none';
                document.getElementById('disp3').style.display = 'none';
            }
    </script>
    <footer class="debate-footer">
        <div class="debate-footer">
            <button onClick="show()">Create <br>debate</button>
        </div>
    </footer>
    <div class="debatediv" id="disp">
        <div class="close" onClick="hide()">+</div>
        <div class="debate-create animate" id="disp">
            <div>
                <form>
                    <h1>Create an Debate</h1>
                    <input type="text" placeholder="Debate  Title  Name" class="input">
                    <input type="text" placeholder="Hash Tags" class="input">
                    <input type="text" placeholder="My Team Name" class="input">
                    <input type="text" placeholder="Opponent Team Name" class="input">
                    <p>Challenge to</p>
                    <input type="text" placeholder="Username" class="userinput">
                    <input type="submit" value="Create Debate Challenge" class="submit-input" onClick="show2()">
                </form>
            </div>
        </div>
    </div>


        <div class="block" id="disp2">
            <div class="close" onClick="hide()">+</div>
            <div class="squaddiv">
                <form>
                <h1>Create my Squad</h1>
                    <input type="name" placeholder="Squad-name" class="input">
                    <input type="name" placeholder="Squad-Category" class="input">
                    <input type="submit" value="Create new Squad" class="submit-input" onClick="show3()">
                </form>
        
            </div>
        </div>

            <div class="block" id="disp3">
                <div class="close" onClick="hide()">+</div>
                <div class="squadclass">
                    <img src="a.jpg" class="image">
                    <h1>Add your squad </h1>
                    <form>
                        <input type="text" placeholder="Username" class="input">
                        <input type="submit" placeholder="Create New Squad" class="submit-input">
                    </form>
                </div>
            </div>
          
