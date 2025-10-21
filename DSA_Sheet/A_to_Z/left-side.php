<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        ::-webkit-scrollbar-track {
    background: #1e1e1e; /* Dark background */
}

        .main-1{
           
            height: 120vh; 
            
        }
        body, .navbar, .btn, .m {
            transition: background-color 0.3s, color 0.3s, border 0.3s;
        }
        .m {
            font-size: 17px;
            border: 2px solid black;
            border-radius: 7px;
            padding: 2px 6px;
            cursor: pointer;
        }
        .mm {
            cursor: pointer;
            font-size: 12px;
            border: 2px solid transparent;
            border-radius: 6px;
            padding: 2px 6px;
            background: linear-gradient(white, white) padding-box, linear-gradient(to right, #db2777, #f472b6) border-box;
        }
        .heading {
            font-size: 2.2rem;
        }
        
        .light-mode {
            background-color: #ffffff;
            color: #000000;
        }
        .dark-mode {
            background-color: #121212;
            color: #ffffff;
        }
        
        .navbar-light {
            background-color: #f8f9fa !important;
        }
        .navbar-dark {
            background-color: #333 !important;
        }
        @media (prefers-color-scheme: dark) {
            .custom-dark-bg {
                background-color: #333; /* Your dark background color */
            }
        }
        .star {
            cursor: pointer;
            transition: fill 0.3s ease;
        }
        /* Style when the star is filled with golden color */
        .filled {
            fill: gold;
        }
        .left-side
        {
            position: fixed;
            
            width: 16.66%; 
            height: 100vh; 
            background-color: #000000;
            color: white;
            flex-shrink: 0;
           
            z-index: 1030;
        }
        .logo
        {
            display: flex;
            justify-content: center;
        }
        .logo img
        {
            width: 75px;
            height: 75px;
            margin-left:auto;
            margin-right:auto;
            border-radius:38px;
        }
        .icon
        {
            margin-right:21px;
        }
        .icon-profile
        {
            margin-top:40px;
            display: flex;
            justify-content: flex-start;
            margin-left:10px;
            text-decoration:none;
        }
        .icon-blog  
        {
            margin-top:10px;
            display: flex;
            justify-content: flex-start;
            margin-left:10px;
            text-decoration:none;
        }
        .dsa-sheet
        {
            width:100%;
            display: flex;
            justify-content: flex-start;
            color:white;
            position: relative;
            margin-bottom:7px;
        }
        .left-2::-webkit-scrollbar {
            width: 8px;
        }

        .left-2::-webkit-scrollbar-track {
            background: #000; /* Black */
        }

        .left-2::-webkit-scrollbar-thumb {
            background: #db2777; /* Pink */
            border-radius: 5px;
        }

        
        .border
        {
            border-top:1px solid white;
        }
        .left-2
        { 
            margin-top:15px;
            max-height:200px;
            overflow-y:auto;
            margin-right:-12px;
        }
        .system-design
        {
            display: flex;
            justify-content: flex-start;
            margin-left:12px; 
            margin-top:7px;
            margin-bottom:7px;
            
        }
        .left-3
        {
            margin-top:15px;
        }
        .green-check-box
        {
            width: 20px;
            height: 20px;
            border:1px solid black;
            background-color: white;
            border-radius:4px;
        }
        .btn-check:checked + .green-check-box
         {
            background-color: green;
            border-color: green;
        }
        .link-question
        {
            text-decoration:none;
            color:black;
        }
        .modal-text
        {
            font-size:26px;
            text-align:center;
            margin-top:10px;
        }
        .register-page-link
        {
            text-decoration:none;
            color:#db2777;
        }
        .modal-body-1
        {
            background-color: black;
        }
        .register-text
        {
            color:white;
            margin:0px 0px 5px 20px;
        }
        .animated-title {
            font-family: 'Fredoka', sans-serif;
            color: #db2777;
            font-weight: 600;
            letter-spacing: 1px;
            
        }
        .modal-header
        {
            border: none !important; 
        }
        .modal-body
        {
            border: none !important;  
        }
        .btn-color
        {
            background-color: #f43f5e;
        }
        .right-side
        {
            margin-left:200px;
        }
    </style>
</head>
<body>
    <div class="row main"> 
        
        <div class="col-md-2 left-side">
            <div class="logo">
                <img src="images/logo.jpeg">
            </div>
            <div class="icon-profile">
                <a href="#">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                    </svg><p style="font-size:16px; float:right; color:white;">Profile</p>
                </a>
            </div> 
            <div class="icon-blog">
                <a href="#">
                    <svg  class="icon" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white" class="bi bi-book" viewBox="0 0 16 16">
                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
                    </svg><p style="font-size:16px;  float:right; color:white;">Blogs</p>
                </a>
            </div>  
            <div class="left-2 border">
                <div class="dropdown dsa-sheet">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-popper="none" aria-expanded="false" data-bs-auto-close="outside">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white" class="bi bi-clipboard" viewBox="0 0 16 16">
                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z"/>
                            <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z"/>
                        </svg>
                        <p style="font-size:16px; float:right; color:white;">DSA Sheet</p>
                    </button>
                    <div class="dropdown-menu dropdown-content">
                        <div>
                            <a class="dropdown-item drop-menu" href="#">A2Z Sheet</a>
                        </div>
                        <div>
                            <a class="dropdown-item drop-menu" href="#">SDE Sheet</a>    
                        </div>
                        <div>
                            <a class="dropdown-item drop-menu" href="#">79 Sheet</a>
                        </div>
                        <div>
                            <a class="dropdown-item drop-menu" href="#">Blind 75 Sheet</a>
                        </div>
                    </div>
                </div>
                
                <div>
                    <div class="system-design">
                        <a href="#" id="belowBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                            </svg><p style="font-size:16px;  float:right; color:white; margin-left:19px;">System Design</p>
                        </a>
                    </div>
                </div>
                <div class="dropdown dsa-sheet" id="belowBtn">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-popper="static" aria-expanded="false" data-bs-auto-close="outside">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white" class="bi bi-play-btn" viewBox="0 0 16 16">
                        <path d="M6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814z"/>
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm15 0a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/>
                    </svg>
                        <p style="font-size:16px; float:right; color:white;">Striver's DSA Playlist</p>
                    </button>
                    <div class="dropdown-menu drop-menu">
                        <div>
                            <a class="dropdown-item drop-menu" href="#">Array Series</a>
                        </div>
                        <div>
                            <a class="dropdown-item drop-menu" href="#">DP Series</a>    
                        </div>
                        <div>
                            <a class="dropdown-item drop-menu" href="#">Graph Series</a>
                        </div>
                        <div>
                            <a class="dropdown-item drop-menu" href="#">LinkedList Series</a>
                        </div>
                    </div>
                </div>
                <div class="dropdown dsa-sheet" id="belowBtn" >
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-popper="static" aria-expanded="false" data-bs-auto-close="outside">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white" class="bi bi-mortarboard" viewBox="0 0 16 16">
                        <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z"/>
                        <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z"/>
                    </svg>
                    <p style="font-size:16px; float:right; color:white;">SDE Core Sheets</p>
                    </button>
                    <div class="dropdown-menu drop-menu">
                        <div>
                            <a class="dropdown-item drop-menu" href="#">DBMS</a>
                        </div>
                        <div>
                            <a class="dropdown-item drop-menu" href="#">Operating System</a>    
                        </div>
                        <div>
                            <a class="dropdown-item drop-menu" href="#">Compter Networks</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="system-design" id="belowBtn">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                            </svg>
                            <p style="font-size:16px;  float:right; color:white; margin-left:19px;">Striver's CP Sheet</p>
                        </a>
                    </div>
                </div>
            </div> 
            <div class="left-3">
                <div class="system-design" id="belowBtn">
                    <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white" class="bi bi-bookmark" viewBox="0 0 16 16">
                        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z"/>
                    </svg>
                    <p style="font-size:16px;  float:right; color:white; margin-left:19px;">Saved Notes</p>
                    </a>
                </div> 
                <div class="system-design">
                    <a href="#" id="belowBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white" class="bi bi-gear-fill" viewBox="0 0 16 16">
                            <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                        </svg><p style="font-size:16px;  float:right; color:white; margin-left:19px;">CW Fullstack Final</p>
                    </a>
                </div> 
            </div>
        </div>
        <div class="col-md-10">

       
