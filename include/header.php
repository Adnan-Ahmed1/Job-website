<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySarkari Naukri</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.min.css">
    <!-- <link rel="stylesheet" href="css/animate.min.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script>
        (function() {
            const savedTheme = localStorage.getItem('theme');
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

            if (savedTheme === 'dark' || (!savedTheme && prefersDark)) {
                document.documentElement.setAttribute('data-theme', 'dark');
            }
        })();
    </script>
</head>

<body>
    <div class="mobile-drawer-overlay" id="mobileDrawerOverlay"></div>
    <div class="mobile-drawer" id="mobileDrawer">
        <div class="drawer-header">
            <div class="drawer-logo">
                <div class="logo-text">
                    <span class="logo-title green">I LOVE</span>
                    <span class="logo-title-sub">C A R E E R</span>
                    <span class="logo-subtitle">Govt. Job Updates in One Place</span>
                </div>
            </div>
            <button class="drawer-close-btn" id="drawerCloseBtn" type="button">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <div class="drawer-body">
            <ul class="drawer-menu">
                <!-- Dynamically populated via JavaScript from desktop navbar -->
            </ul>

            <div class="drawer-footer-actions">
                <a href="javascript:void(0);" class="header-social-btn">
                    <i class="fab fa-telegram-plane blue"></i>
                </a>
                <a href="javascript:void(0);" class="header-social-btn">
                    <i class="fab fa-whatsapp green"></i>
                </a>
                <a href="javascript:void(0);" class="header-social-btn">
                    <i class="fab fa-instagram red"></i>
                </a>
                <a href="javascript:void(0);" class="header-mode-btn">
                    <i class="far fa-moon"></i>
                </a>
            </div>
        </div>
    </div>

    <header class="main-header">
        <div class="container header-container">
            <button class="navbar-toggler d-lg-none" type="button" id="mobileMenuToggle" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="logo">
                <div class="logo-text">
                    <span class="logo-title green">I LOVE</span>
                    <span class="logo-title-sub">C A R E E R</span>
                    <span class="logo-subtitle">Govt. Job Updates in One Place</span>
                </div>
            </div>

            <div class="header-search">
                <i class="fas fa-search search-icon"></i>
                <input type="text" placeholder="Search for jobs, results, admit cards...">
            </div>

            <div class="header-actions">
                <a href="javascript:void(0);" class="header-social-btn">
                    <i class="fab fa-telegram-plane blue"></i>
                </a>
                <a href="javascript:void(0);" class="header-social-btn">
                    <i class="fab fa-whatsapp green"></i>
                </a>
                <a href="javascript:void(0);" class="header-social-btn">
                    <i class="fab fa-instagram red"></i>
                </a>
                <div class="header-line"></div>
                <a href="javascript:void(0);" class="header-mode-btn">
                    <i class="far fa-moon"></i>
                </a>
                <div class="header-line"></div>
                <a href="javascript:void(0);" class="header-search-toggle-btn d-lg-none" id="mobileSearchToggle" aria-label="Toggle search">
                    <i class="far fa-search"></i>
                </a>
                <a href="javascript:void(0);" class="header-login-btn">
                    <i class="far fa-user"></i>
                </a>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="job.php">Jobs</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="result.php">Results</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="admit-card.php">Admit Card</a>
                    </li>

                    <li class="nav-item has-mega-menu">
                        <a class="nav-link" href="answer-key.php">Answer Key <i class="fas fa-chevron-down ms-1"></i></a>
                        <div class="mega-menu">
                            <div class="mega-menu-content">
                                <div class="mega-menu-col">
                                    <div class="mega-col-header">
                                        <h3>All Boards</h3>
                                        <div class="mega-search-wrapper">
                                            <i class="fas fa-search"></i>
                                            <input type="text" class="mega-search-input"
                                                placeholder="Search All Boards...">
                                        </div>
                                    </div>
                                    <ul>
                                        <li>
                                            Central / National
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">CBSE
                                                        Board</a></li>
                                                <li><a href="question-paper.php?state=wb">ICSE
                                                        / ISC Board</a></li>
                                                <li><a href="question-paper.php?state=wb">NIOS</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Andhra Pradesh
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=ap">BSEAP
                                                        (10th)</a></li>
                                                <li><a href="question-paper.php?state=ap">BIEAP
                                                        (12th)</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Assam
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=as">SEBA
                                                        (10th)</a></li>
                                                <li><a href="question-paper.php?state=as">AHSEC
                                                        (12th)</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Bihar
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=br">BSEB
                                                        (Bihar Board)</a></li>
                                                <li><a href="question-paper.php?state=br">BBOSE
                                                        (Open Board)</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Chhattisgarh
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=cg">CGBSE</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            Goa
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">GBSHSE</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Gujarat
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=gj">GSEB</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Haryana
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=hr">HBSE
                                                        (BSEH)</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Himachal Pradesh
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=hp">HPBOSE</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Jharkhand
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=jh">JAC
                                                        Board</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Karnataka
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=ka">KSEAB
                                                        (SSLC)</a></li>
                                                <li><a href="question-paper.php?state=ka">DPUE
                                                        (PUC)</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Kerala
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=kl">KBPE
                                                        (SSLC)</a></li>
                                                <li><a href="question-paper.php?state=kl">DHSE
                                                        (Plus Two)</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Madhya Pradesh
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=mp">MPBSE
                                                        (MP Board)</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Maharashtra
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=mh">MSBSHSE</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Manipur
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">BSEM</a>
                                                </li>
                                                <li><a href="question-paper.php?state=wb">COHSEM</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Meghalaya
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">MBOSE</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Mizoram
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">MBSE</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Nagaland
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">NBSE</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Odisha
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=od">BSE
                                                        Odisha</a></li>
                                                <li><a href="question-paper.php?state=od">CHSE
                                                        Odisha</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Punjab
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=pb">PSEB</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Rajasthan
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=rj">RBSE
                                                        (BSER)</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Tamil Nadu
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=tn">DGE
                                                        TN (SSLC / HSC)</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Telangana
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=ts">BSE
                                                        Telangana</a></li>
                                                <li><a href="question-paper.php?state=ts">TSBIE</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Tripura
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">TBSE</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Uttar Pradesh
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=up">UPMSP
                                                        (UP Board)</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Uttarakhand
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=uk">UBSE</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            West Bengal
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">WBBSE</a>
                                                </li>
                                                <li><a href="question-paper.php?state=wb">WBCHSE</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu-col">
                                    <div class="mega-col-header">
                                        <h3>All State Universities</h3>
                                        <div class="mega-search-wrapper">
                                            <i class="fas fa-search"></i>
                                            <input type="text" class="mega-search-input"
                                                placeholder="Search All State Universities...">
                                        </div>
                                    </div>
                                    <ul>
                                        <li>
                                            Andhra Pradesh
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=ap">Acharya
                                                        Nagarjuna University</a></li>
                                                <li><a href="question-paper.php?state=ap">Adikavi
                                                        Nannaya University</a></li>
                                                <li><a href="question-paper.php?state=ap">Andhra
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ap">Damodaram
                                                        Sanjivayya National Law University</a></li>
                                                <li><a href="question-paper.php?state=ap">Dr.
                                                        Abdul Haq Urdu University</a></li>
                                                <li><a href="question-paper.php?state=ap">Dr.
                                                        B.R. Ambedkar University</a></li>
                                                <li><a href="question-paper.php?state=ap">Dr.
                                                        Y.S.R. Horticultural University</a></li>
                                                <li><a href="question-paper.php?state=ap">Dravidian
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ap">Jawaharlal
                                                        Nehru Technological University, Anantapur</a>
                                                </li>
                                                <li><a href="question-paper.php?state=ap">Jawaharlal
                                                        Nehru Technological University, Kakinada</a>
                                                </li>
                                                <li><a href="question-paper.php?state=ap">Krishna
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ap">Rayalaseema
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ap">Sri
                                                        Krishnadevaraya University</a></li>
                                                <li><a href="question-paper.php?state=ap">Sri
                                                        Padmavati Mahila Visvavidyalayam</a></li>
                                                <li><a href="question-paper.php?state=ap">Sri
                                                        Venkateswara Institute of Medical Sciences</a>
                                                </li>
                                                <li><a href="question-paper.php?state=ap">Sri
                                                        Venkateswara University</a></li>
                                                <li><a href="question-paper.php?state=ap">Sri
                                                        Venkateswara Veterinary University</a></li>
                                                <li><a href="question-paper.php?state=ap">Vikrama
                                                        Simhapuri University</a></li>
                                                <li><a href="question-paper.php?state=ap">Yogi
                                                        Vemana University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Arunachal Pradesh
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=ap">Arunachal
                                                        University of Studies</a></li>
                                                <li><a href="question-paper.php?state=ap">Rajiv
                                                        Gandhi University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Assam
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=as">Assam
                                                        Agricultural University</a></li>
                                                <li><a href="question-paper.php?state=as">Assam
                                                        Rajiv Gandhi University of Cooperative
                                                        Management</a></li>
                                                <li><a href="question-paper.php?state=as">Assam
                                                        Science and Technology University</a></li>
                                                <li><a href="question-paper.php?state=as">Assam
                                                        Women's University</a></li>
                                                <li><a href="question-paper.php?state=as">Bodoland
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=as">Cotton
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=as">Dibrugarh
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=as">Gauhati
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=as">Kumar
                                                        Bhaskar Varma Sanskrit and Ancient Studies
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=as">Majuli
                                                        University of Culture</a></li>
                                                <li><a href="question-paper.php?state=as">National
                                                        Law University and Judicial Academy</a></li>
                                                <li><a href="question-paper.php?state=as">Srimanta
                                                        Sankaradeva University of Health Sciences</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Bihar
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=br">Aryabhatta
                                                        Knowledge University</a></li>
                                                <li><a href="question-paper.php?state=br">Babasaheb
                                                        Bhimrao Ambedkar Bihar University</a></li>
                                                <li><a href="question-paper.php?state=br">Bhupendra
                                                        Narayan Mandal University</a></li>
                                                <li><a href="question-paper.php?state=br">Bihar
                                                        Agricultural University</a></li>
                                                <li><a href="question-paper.php?state=br">Chanakya
                                                        National Law University</a></li>
                                                <li><a href="question-paper.php?state=br">Jai
                                                        Prakash University</a></li>
                                                <li><a href="question-paper.php?state=br">Kameshwar
                                                        Singh Darbhanga Sanskrit University</a></li>
                                                <li><a href="question-paper.php?state=br">Lalit
                                                        Narayan Mithila University</a></li>
                                                <li><a href="question-paper.php?state=br">Magadh
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=br">Maulana
                                                        Mazharul Haque Arabic and Persian University</a>
                                                </li>
                                                <li><a href="question-paper.php?state=br">Munger
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=br">Nalanda
                                                        Open University</a></li>
                                                <li><a href="question-paper.php?state=br">Patna
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=br">Purnea
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=br">Tilka
                                                        Manjhi Bhagalpur University</a></li>
                                                <li><a href="question-paper.php?state=br">Veer
                                                        Kunwar Singh University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Chhattisgarh
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=cg">Ayush
                                                        and Health Sciences University of
                                                        Chhattisgarh</a></li>
                                                <li><a href="question-paper.php?state=cg">Bastar
                                                        Vishwavidyalaya</a></li>
                                                <li><a href="question-paper.php?state=cg">Bilaspur
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=cg">Chhattisgarh
                                                        Kamdhenu Vishwavidyalaya</a></li>
                                                <li><a href="question-paper.php?state=cg">Chhattisgarh
                                                        Swami Vivekanand Technical University</a></li>
                                                <li><a href="question-paper.php?state=cg">Hidayatullah
                                                        National Law University</a></li>
                                                <li><a href="question-paper.php?state=cg">Indira
                                                        Gandhi Agricultural University</a></li>
                                                <li><a href="question-paper.php?state=cg">Indira
                                                        Kala Sangeet Vishwavidyalaya</a></li>
                                                <li><a href="question-paper.php?state=cg">Kushabhau
                                                        Thakre Patrakarita Avam Jansanchar
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=cg">Pandit
                                                        Ravishankar Shukla University</a></li>
                                                <li><a href="question-paper.php?state=cg">Sarguja
                                                        University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Delhi
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=dl">Ambedkar
                                                        University Delhi</a></li>
                                                <li><a href="question-paper.php?state=dl">Delhi
                                                        Pharmaceutical Sciences and Research
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=dl">Delhi
                                                        Technological University</a></li>
                                                <li><a href="question-paper.php?state=dl">Guru
                                                        Gobind Singh Indraprastha University</a></li>
                                                <li><a href="question-paper.php?state=dl">Indira
                                                        Gandhi Delhi Technical University for Women</a>
                                                </li>
                                                <li><a href="question-paper.php?state=dl">Indraprastha
                                                        Institute of Information Technology</a></li>
                                                <li><a href="question-paper.php?state=dl">National
                                                        Law University</a></li>
                                                <li><a href="question-paper.php?state=dl">Netaji
                                                        Subhas University of Technology</a></li>
                                                <li><a href="question-paper.php?state=dl">Delhi
                                                        Teachers University</a></li>
                                                <li><a href="question-paper.php?state=dl">Delhi
                                                        Skill and Entrepreneurship University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Goa
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">Goa
                                                        University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Gujarat
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=gj">Anand
                                                        Agricultural University</a></li>
                                                <li><a href="question-paper.php?state=gj">Bhakta
                                                        Kavi Narsinh Mehta University</a></li>
                                                <li><a href="question-paper.php?state=gj">Birsa
                                                        Munda Tribal University</a></li>
                                                <li><a href="question-paper.php?state=gj">Centre
                                                        for Environmental Planning and Technology
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=gj">Dharmsinh
                                                        Desai University</a></li>
                                                <li><a href="question-paper.php?state=gj">Dr.
                                                        Babasaheb Ambedkar Open University</a></li>
                                                <li><a href="question-paper.php?state=gj">Gujarat
                                                        Ayurved University</a></li>
                                                <li><a href="question-paper.php?state=gj">Gujarat
                                                        Forensic Sciences University</a></li>
                                                <li><a href="question-paper.php?state=gj">Gujarat
                                                        National Law University</a></li>
                                                <li><a href="question-paper.php?state=gj">Gujarat
                                                        Technological University</a></li>
                                                <li><a href="question-paper.php?state=gj">Gujarat
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=gj">Gujarat
                                                        Vidyapith</a></li>
                                                <li><a href="question-paper.php?state=gj">Hemchandracharya
                                                        North Gujarat University</a></li>
                                                <li><a href="question-paper.php?state=gj">Indian
                                                        Institute of Teacher Education</a></li>
                                                <li><a href="question-paper.php?state=gj">Indubhai
                                                        Parekh School of Architecture</a></li>
                                                <li><a href="question-paper.php?state=gj">Junagadh
                                                        Agricultural University</a></li>
                                                <li><a href="question-paper.php?state=gj">Krantiguru
                                                        Shyamji Krishna Verma Kachchh University</a>
                                                </li>
                                                <li><a href="question-paper.php?state=gj">Maharaja
                                                        Krishnakumarsinhji Bhavnagar University</a></li>
                                                <li><a href="question-paper.php?state=gj">Navsari
                                                        Agricultural University</a></li>
                                                <li><a href="question-paper.php?state=gj">Raksha
                                                        Shakti University</a></li>
                                                <li><a href="question-paper.php?state=gj">Sardarkrushinagar
                                                        Dantiwada Agricultural University</a></li>
                                                <li><a href="question-paper.php?state=gj">Saurashtra
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=gj">Shree
                                                        Somnath Sanskrit University</a></li>
                                                <li><a href="question-paper.php?state=gj">Swarnim
                                                        Gujarat Sports University</a></li>
                                                <li><a href="question-paper.php?state=gj">Teachers
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=gj">The
                                                        Maharaja Sayajirao University of Baroda</a></li>
                                                <li><a href="question-paper.php?state=gj">Veer
                                                        Narmad South Gujarat University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Haryana
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=hr">Bhagat
                                                        Phool Singh Mahila Vishwavidyalaya</a></li>
                                                <li><a href="question-paper.php?state=hr">Chaudhary
                                                        Bansi Lal University</a></li>
                                                <li><a href="question-paper.php?state=hr">Chaudhary
                                                        Charan Singh Haryana Agricultural University</a>
                                                </li>
                                                <li><a href="question-paper.php?state=hr">Chaudhary
                                                        Devi Lal University</a></li>
                                                <li><a href="question-paper.php?state=hr">Chaudhary
                                                        Ranbir Singh University</a></li>
                                                <li><a href="question-paper.php?state=hr">Deenbandhu
                                                        Chhotu Ram University of Science and
                                                        Technology</a></li>
                                                <li><a href="question-paper.php?state=hr">Guru
                                                        Jambheshwar University of Science and
                                                        Technology</a></li>
                                                <li><a href="question-paper.php?state=hr">Indira
                                                        Gandhi University</a></li>
                                                <li><a href="question-paper.php?state=hr">Kurukshetra
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=hr">Lala
                                                        Lajpat Rai University of Veterinary and Animal
                                                        Sciences</a></li>
                                                <li><a href="question-paper.php?state=hr">Maharshi
                                                        Dayanand University</a></li>
                                                <li><a href="question-paper.php?state=hr">Pandit
                                                        Bhagwat Dayal Sharma University of Health
                                                        Sciences</a></li>
                                                <li><a href="question-paper.php?state=hr">State
                                                        University of Performing and Visual Arts</a>
                                                </li>
                                                <li><a href="question-paper.php?state=hr">YMCA
                                                        University of Science and Technology</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Himachal Pradesh
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=hp">Chaudhary
                                                        Sarwan Kumar Himachal Pradesh Krishi
                                                        Vishvavidyalaya</a></li>
                                                <li><a href="question-paper.php?state=hp">Dr.
                                                        Yashwant Singh Parmar University of Horticulture
                                                        and Forestry</a>
                                                </li>
                                                <li><a href="question-paper.php?state=hp">Himachal
                                                        Pradesh Technical University</a></li>
                                                <li><a href="question-paper.php?state=hp">Himachal
                                                        Pradesh University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Jharkhand
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=jh">Binod
                                                        Bihari Mahto Koyalanchal University</a></li>
                                                <li><a href="question-paper.php?state=jh">Birsa
                                                        Agricultural University</a></li>
                                                <li><a href="question-paper.php?state=jh">Dr.
                                                        Shyama Prasad Mukherjee University</a></li>
                                                <li><a href="question-paper.php?state=jh">Jharkhand
                                                        Raksha Shakti University</a></li>
                                                <li><a href="question-paper.php?state=jh">Kolhan
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=jh">National
                                                        University of Study and Research in Law</a></li>
                                                <li><a href="question-paper.php?state=jh">Nilamber-Pitamber
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=jh">Ranchi
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=jh">Sido
                                                        Kanhu Murmu University</a></li>
                                                <li><a href="question-paper.php?state=jh">Vinoba
                                                        Bhave University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Karnataka
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=ka">Bangalore
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ka">Davangere
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ka">Gulbarga
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ka">Kannada
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ka">Karnatak
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ka">Karnataka
                                                        State Law University</a></li>
                                                <li><a href="question-paper.php?state=ka">Karnataka
                                                        State Open University</a></li>
                                                <li><a href="question-paper.php?state=ka">Karnataka
                                                        State Women's University</a></li>
                                                <li><a href="question-paper.php?state=ka">Karnataka
                                                        Veterinary, Animal and Fisheries Sciences
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ka">Kuvempu
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ka">Mangalore
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ka">Mysore
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ka">National
                                                        Law School of India University</a></li>
                                                <li><a href="question-paper.php?state=ka">Rajiv
                                                        Gandhi University of Health Sciences</a></li>
                                                <li><a href="question-paper.php?state=ka">Rani
                                                        Channamma University</a></li>
                                                <li><a href="question-paper.php?state=ka">Tumkur
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ka">University
                                                        of Agricultural Sciences, Bangalore</a></li>
                                                <li><a href="question-paper.php?state=ka">University
                                                        of Agricultural Sciences, Dharwad</a></li>
                                                <li><a href="question-paper.php?state=ka">University
                                                        of Agricultural Sciences, Raichur</a></li>
                                                <li><a href="question-paper.php?state=ka">University
                                                        of Horticultural Sciences, Bagalkot</a></li>
                                                <li><a href="question-paper.php?state=ka">Visvesvaraya
                                                        Technological University</a></li>
                                                <li><a href="question-paper.php?state=ka">Vijayanagara
                                                        Sri Krishnadevaraya University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Kerala
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=kl">APJ
                                                        Abdul Kalam Technological University</a></li>
                                                <li><a href="question-paper.php?state=kl">Cochin
                                                        University of Science and Technology</a></li>
                                                <li><a href="question-paper.php?state=kl">Kannur
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=kl">Kerala
                                                        Agricultural University</a></li>
                                                <li><a href="question-paper.php?state=kl">Kerala
                                                        University of Fisheries and Ocean Studies</a>
                                                </li>
                                                <li><a href="question-paper.php?state=kl">Kerala
                                                        University of Health Sciences</a></li>
                                                <li><a href="question-paper.php?state=kl">Kerala
                                                        Veterinary and Animal Sciences University</a>
                                                </li>
                                                <li><a href="question-paper.php?state=kl">Mahatma
                                                        Gandhi University</a></li>
                                                <li><a href="question-paper.php?state=kl">National
                                                        University of Advanced Legal Studies</a></li>
                                                <li><a href="question-paper.php?state=kl">Sree
                                                        Sankaracharya University of Sanskrit</a></li>
                                                <li><a href="question-paper.php?state=kl">Thunchath
                                                        Ezhuthachan Malayalam University</a></li>
                                                <li><a href="question-paper.php?state=kl">University
                                                        of Calicut</a></li>
                                                <li><a href="question-paper.php?state=kl">University
                                                        of Kerala</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Madhya Pradesh
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=mp">Atal
                                                        Bihari Vajpayee Hindi Vishwavidyalaya</a></li>
                                                <li><a href="question-paper.php?state=mp">Awadesh
                                                        Pratap Singh University</a></li>
                                                <li><a href="question-paper.php?state=mp">Barkatullah
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=mp">Devi
                                                        Ahilya Vishwavidyalaya</a></li>
                                                <li><a href="question-paper.php?state=mp">Dr.
                                                        B.R. Ambedkar University of Social Sciences</a>
                                                </li>
                                                <li><a href="question-paper.php?state=mp">Jawaharlal
                                                        Nehru Krishi Vishwavidyalaya</a></li>
                                                <li><a href="question-paper.php?state=mp">Jiwaji
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=mp">Madhya
                                                        Pradesh Medical Science University</a></li>
                                                <li><a href="question-paper.php?state=mp">Maharishi
                                                        Panini Sanskrit Evam Vedic Vishwavidyalaya</a>
                                                </li>
                                                <li><a href="question-paper.php?state=mp">Mahatma
                                                        Gandhi Chitrakoot Gramoday Vishwavidyalaya</a>
                                                </li>
                                                <li><a href="question-paper.php?state=mp">Makhanlal
                                                        Chaturvedi National University of Journalism and
                                                        Communication</a>
                                                </li>
                                                <li><a href="question-paper.php?state=mp">Nanaji
                                                        Deshmukh Veterinary Science University</a></li>
                                                <li><a href="question-paper.php?state=mp">National
                                                        Law Institute University</a></li>
                                                <li><a href="question-paper.php?state=mp">Rajmata
                                                        Vijayaraje Scindia Krishi Vishwavidyalaya</a>
                                                </li>
                                                <li><a href="question-paper.php?state=mp">Rani
                                                        Durgavati Vishwavidyalaya</a></li>
                                                <li><a href="question-paper.php?state=mp">Rajiv
                                                        Gandhi Proudyogiki Vishwavidyalaya</a></li>
                                                <li><a href="question-paper.php?state=mp">Sanchi
                                                        University of Buddhist-Indic Studies</a></li>
                                                <li><a href="question-paper.php?state=mp">Vikram
                                                        University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Maharashtra
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=mh">Dr.
                                                        Babasaheb Ambedkar Marathwada University</a>
                                                </li>
                                                <li><a href="question-paper.php?state=mh">Dr.
                                                        Babasaheb Ambedkar Technological University</a>
                                                </li>
                                                <li><a href="question-paper.php?state=mh">Dr.
                                                        Panjabrao Deshmukh Krishi Vidyapeeth</a></li>
                                                <li><a href="question-paper.php?state=mh">Gondwana
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=mh">Kavi
                                                        Kulguru Kalidas Sanskrit University</a></li>
                                                <li><a href="question-paper.php?state=mh">Maharashtra
                                                        Animal and Fishery Sciences University</a></li>
                                                <li><a href="question-paper.php?state=mh">Maharashtra
                                                        University of Health Sciences</a></li>
                                                <li><a href="question-paper.php?state=mh">Mahatma
                                                        Phule Krishi Vidyapeeth</a></li>
                                                <li><a href="question-paper.php?state=mh">Marathwada
                                                        Agricultural University</a></li>
                                                <li><a href="question-paper.php?state=mh">Mumbai
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=mh">North
                                                        Maharashtra University</a></li>
                                                <li><a href="question-paper.php?state=mh">Rashtrasant
                                                        Tukadoji Maharaj Nagpur University</a></li>
                                                <li><a href="question-paper.php?state=mh">Sant
                                                        Gadge Baba Amravati University</a></li>
                                                <li><a href="question-paper.php?state=mh">Shivaji
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=mh">Shreemati
                                                        Nathibai Damodar Thackersey Women's
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=mh">Solapur
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=mh">Swami
                                                        Ramanand Teerth Marathwada University</a></li>
                                                <li><a href="question-paper.php?state=mh">Savitribai
                                                        Phule Pune University</a></li>
                                                <li><a href="question-paper.php?state=mh">Yashwantrao
                                                        Chavan Maharashtra Open University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Odisha
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=od">Berhampur
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=od">Biju
                                                        Patnaik University of Technology</a></li>
                                                <li><a href="question-paper.php?state=od">Fakir
                                                        Mohan University</a></li>
                                                <li><a href="question-paper.php?state=od">Gangadhar
                                                        Meher University</a></li>
                                                <li><a href="question-paper.php?state=od">Khallikote
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=od">National
                                                        Law University Odisha</a></li>
                                                <li><a href="question-paper.php?state=od">North
                                                        Orissa University</a></li>
                                                <li><a href="question-paper.php?state=od">Odisha
                                                        State Open University</a></li>
                                                <li><a href="question-paper.php?state=od">Odisha
                                                        University of Agriculture and Technology</a>
                                                </li>
                                                <li><a href="question-paper.php?state=od">Rama
                                                        Devi Women's University</a></li>
                                                <li><a href="question-paper.php?state=od">Ravenshaw
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=od">Sambalpur
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=od">Shri
                                                        Jagannath Sanskrit Vishvavidyalaya</a></li>
                                                <li><a href="question-paper.php?state=od">Utkal
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=od">Utkal
                                                        University of Culture</a></li>
                                                <li><a href="question-paper.php?state=od">Veer
                                                        Surendra Sai University of Technology</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Punjab
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=pb">Baba
                                                        Farid University of Health Sciences</a></li>
                                                <li><a href="question-paper.php?state=pb">Guru
                                                        Angad Dev Veterinary and Animal Sciences
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=pb">Guru
                                                        Nanak Dev University</a></li>
                                                <li><a href="question-paper.php?state=pb">Guru
                                                        Ravidas Ayurved University</a></li>
                                                <li><a href="question-paper.php?state=pb">I.
                                                        K. Gujral Punjab Technical University</a></li>
                                                <li><a href="question-paper.php?state=pb">Maharaja
                                                        Ranjit Singh Punjab Technical University</a>
                                                </li>
                                                <li><a href="question-paper.php?state=pb">Panjab
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=pb">Punjab
                                                        Agricultural University</a></li>
                                                <li><a href="question-paper.php?state=pb">Punjabi
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=pb">Rajiv
                                                        Gandhi National University of Law</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Rajasthan
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=rj">Agriculture
                                                        University, Jodhpur</a></li>
                                                <li><a href="question-paper.php?state=rj">Agriculture
                                                        University, Kota</a></li>
                                                <li><a href="question-paper.php?state=rj">Dr.
                                                        Sarvepalli Radhakrishnan Rajasthan Ayurved
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=rj">Govind
                                                        Guru Tribal University</a></li>
                                                <li><a href="question-paper.php?state=rj">Haridev
                                                        Joshi University of Journalism and Mass
                                                        Communication</a></li>
                                                <li><a href="question-paper.php?state=rj">Jagadguru
                                                        Ramanandacharya Rajasthan Sanskrit
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=rj">Jai
                                                        Narain Vyas University</a></li>
                                                <li><a href="question-paper.php?state=rj">Maharaja
                                                        Ganga Singh University</a></li>
                                                <li><a href="question-paper.php?state=rj">Maharaja
                                                        Surajmal Brij University</a></li>
                                                <li><a href="question-paper.php?state=rj">Maharana
                                                        Pratap University of Agriculture and
                                                        Technology</a></li>
                                                <li><a href="question-paper.php?state=rj">Maharshi
                                                        Dayanand Saraswati University</a></li>
                                                <li><a href="question-paper.php?state=rj">Mohanlal
                                                        Sukhadia University</a></li>
                                                <li><a href="question-paper.php?state=rj">National
                                                        Law University, Jodhpur</a></li>
                                                <li><a href="question-paper.php?state=rj">Pandit
                                                        Deendayal Upadhyaya Shekhawati University</a>
                                                </li>
                                                <li><a href="question-paper.php?state=rj">Raj
                                                        Rishi Bhartrihari Matsya University</a></li>
                                                <li><a href="question-paper.php?state=rj">Rajasthan
                                                        Technical University</a></li>
                                                <li><a href="question-paper.php?state=rj">Rajasthan
                                                        University of Health Sciences</a></li>
                                                <li><a href="question-paper.php?state=rj">Rajasthan
                                                        University of Veterinary and Animal Sciences</a>
                                                </li>
                                                <li><a href="question-paper.php?state=rj">Swami
                                                        Keshwanand Rajasthan Agricultural University</a>
                                                </li>
                                                <li><a href="question-paper.php?state=rj">University
                                                        of Kota</a></li>
                                                <li><a href="question-paper.php?state=rj">University
                                                        of Rajasthan</a></li>
                                                <li><a href="question-paper.php?state=rj">Vardhaman
                                                        Mahaveer Open University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Tamil Nadu
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=tn">Alagappa
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=tn">Anna
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=tn">Annamalai
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=tn">Bharathiar
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=tn">Bharathidasan
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=tn">Madurai
                                                        Kamaraj University</a></li>
                                                <li><a href="question-paper.php?state=tn">Manonmaniam
                                                        Sundaranar University</a></li>
                                                <li><a href="question-paper.php?state=tn">Mother
                                                        Teresa Women's University</a></li>
                                                <li><a href="question-paper.php?state=tn">Periyar
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=tn">Tamil
                                                        Nadu Agricultural University</a></li>
                                                <li><a href="question-paper.php?state=tn">Tamil
                                                        Nadu Dr. Ambedkar Law University</a></li>
                                                <li><a href="question-paper.php?state=tn">Tamil
                                                        Nadu Dr. M.G.R. Medical University</a></li>
                                                <li><a href="question-paper.php?state=tn">Tamil
                                                        Nadu Fisheries University</a></li>
                                                <li><a href="question-paper.php?state=tn">Tamil
                                                        Nadu Music and Fine Arts University</a></li>
                                                <li><a href="question-paper.php?state=tn">Tamil
                                                        Nadu National Law School</a></li>
                                                <li><a href="question-paper.php?state=tn">Tamil
                                                        Nadu Open University</a></li>
                                                <li><a href="question-paper.php?state=tn">Tamil
                                                        Nadu Physical Education and Sports
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=tn">Tamil
                                                        Nadu Teachers Education University</a></li>
                                                <li><a href="question-paper.php?state=tn">Tamil
                                                        Nadu Veterinary and Animal Sciences
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=tn">Tamil
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=tn">Thiruvalluvar
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=tn">University
                                                        of Madras</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Telangana
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=ts">Dr.
                                                        B.R. Ambedkar Open University</a></li>
                                                <li><a href="question-paper.php?state=ts">Jawaharlal
                                                        Nehru Architecture and Fine Arts University</a>
                                                </li>
                                                <li><a href="question-paper.php?state=ts">Jawaharlal
                                                        Nehru Technological University, Hyderabad</a>
                                                </li>
                                                <li><a href="question-paper.php?state=ts">Kakatiya
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ts">Kaloji
                                                        Narayana Rao University of Health Sciences</a>
                                                </li>
                                                <li><a href="question-paper.php?state=ts">Mahatma
                                                        Gandhi University, Nalgonda</a></li>
                                                <li><a href="question-paper.php?state=ts">Osmania
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ts">Palamuru
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ts">Potti
                                                        Sreeramulu Telugu University</a></li>
                                                <li><a href="question-paper.php?state=ts">Prof.
                                                        Jayashankar Telangana State Agricultural
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ts">Rajiv
                                                        Gandhi University of Knowledge Technologies</a>
                                                </li>
                                                <li><a href="question-paper.php?state=ts">Satavahana
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ts">Sri
                                                        Konda Laxman Telangana State Horticultural
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ts">Telangana
                                                        University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Uttar Pradesh
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=up">Allahabad
                                                        State University</a></li>
                                                <li><a href="question-paper.php?state=up">Banda
                                                        University of Agriculture and Technology</a>
                                                </li>
                                                <li><a href="question-paper.php?state=up">Bundelkhand
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=up">Chandra
                                                        Shekhar Azad University of Agriculture and
                                                        Technology</a></li>
                                                <li><a href="question-paper.php?state=up">Chaudhary
                                                        Charan Singh University</a></li>
                                                <li><a href="question-paper.php?state=up">Chhatrapati
                                                        Shahu Ji Maharaj University (Kanpur Univ)</a>
                                                </li>
                                                <li><a href="question-paper.php?state=up">Deen
                                                        Dayal Upadhyay Gorakhpur University</a></li>
                                                <li><a href="question-paper.php?state=up">Dr.
                                                        A.P.J. Abdul Kalam Technical University</a></li>
                                                <li><a href="question-paper.php?state=up">Dr.
                                                        B. R. Ambedkar University</a></li>
                                                <li><a href="question-paper.php?state=up">Dr.
                                                        Ram Manohar Lohia Avadh University</a></li>
                                                <li><a href="question-paper.php?state=up">Dr.
                                                        Ram Manohar Lohia National Law University</a>
                                                </li>
                                                <li><a href="question-paper.php?state=up">Dr.
                                                        Shakuntala Misra National Rehabilitation
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=up">Gautam
                                                        Buddha University</a></li>
                                                <li><a href="question-paper.php?state=up">Khwaja
                                                        Moinuddin Chishti Language University</a></li>
                                                <li><a href="question-paper.php?state=up">King
                                                        George's Medical University</a></li>
                                                <li><a href="question-paper.php?state=up">Lucknow
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=up">Madan
                                                        Mohan Malaviya University of Technology</a></li>
                                                <li><a href="question-paper.php?state=up">Mahatma
                                                        Gandhi Kashi Vidyapith</a></li>
                                                <li><a href="question-paper.php?state=up">Mahatma
                                                        Jyotiba Phule Rohilkhand University</a></li>
                                                <li><a href="question-paper.php?state=up">Narendra
                                                        Dev University of Agriculture and Technology</a>
                                                </li>
                                                <li><a href="question-paper.php?state=up">Prof.
                                                        Rajendra Singh (Rajju Bhaiya) University</a>
                                                </li>
                                                <li><a href="question-paper.php?state=up">Sampurnanand
                                                        Sanskrit Vishwavidyalaya</a></li>
                                                <li><a href="question-paper.php?state=up">Sardar
                                                        Vallabhbhai Patel University of Agriculture and
                                                        Technology</a></li>
                                                <li><a href="question-paper.php?state=up">Siddharth
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=up">U.P.
                                                        Pt. Deen Dayal Upadhyaya Pashu Chikitsa Vigyan
                                                        Vishwavidyalaya Evam
                                                        Go-Anusandhan Sansthan</a></li>
                                                <li><a href="question-paper.php?state=up">Uttar
                                                        Pradesh University of Medical Sciences</a></li>
                                                <li><a href="question-paper.php?state=up">Veer
                                                        Bahadur Singh Purvanchal University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Uttarakhand
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=uk">Doon
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=uk">G.
                                                        B. Pant University of Agriculture and
                                                        Technology</a></li>
                                                <li><a href="question-paper.php?state=uk">Hemwati
                                                        Nandan Bahuguna Medical Education University</a>
                                                </li>
                                                <li><a href="question-paper.php?state=uk">Kumaun
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=uk">Sri
                                                        Dev Suman Uttarakhand University</a></li>
                                                <li><a href="question-paper.php?state=uk">Uttarakhand
                                                        Ayurved University</a></li>
                                                <li><a href="question-paper.php?state=uk">Uttarakhand
                                                        Open University</a></li>
                                                <li><a href="question-paper.php?state=uk">Uttarakhand
                                                        Sanskrit University</a></li>
                                                <li><a href="question-paper.php?state=uk">Uttarakhand
                                                        Technical University</a></li>
                                                <li><a href="question-paper.php?state=uk">Uttarakhand
                                                        University of Horticulture and Forestry</a></li>
                                                <li><a href="question-paper.php?state=uk">VCSG
                                                        Uttarakhand University of Horticulture and
                                                        Forestry</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            West Bengal
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">Aliah
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=wb">Bankura
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=wb">Bidhan
                                                        Chandra Krishi Viswavidyalaya</a></li>
                                                <li><a href="question-paper.php?state=wb">Burdwan
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=wb">Calcutta
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=wb">Cooch
                                                        Behar Panchanan Barma University</a></li>
                                                <li><a href="question-paper.php?state=wb">Diamond
                                                        Harbour Women's University</a></li>
                                                <li><a href="question-paper.php?state=wb">Jadavpur
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=wb">Kalyani
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=wb">Kazi
                                                        Nazrul University</a></li>
                                                <li><a href="question-paper.php?state=wb">Maulana
                                                        Abul Kalam Azad University of Technology</a>
                                                </li>
                                                <li><a href="question-paper.php?state=wb">Netaji
                                                        Subhas Open University</a></li>
                                                <li><a href="question-paper.php?state=wb">North
                                                        Bengal University</a></li>
                                                <li><a href="question-paper.php?state=wb">Presidency
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=wb">Rabindra
                                                        Bharati University</a></li>
                                                <li><a href="question-paper.php?state=wb">Raiganj
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=wb">Sidho
                                                        Kanho Birsha University</a></li>
                                                <li><a href="question-paper.php?state=wb">Sanskrit
                                                        College and University</a></li>
                                                <li><a href="question-paper.php?state=wb">Vidyasagar
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=wb">West
                                                        Bengal State University</a></li>
                                                <li><a href="question-paper.php?state=wb">West
                                                        Bengal University of Animal and Fishery
                                                        Sciences</a></li>
                                                <li><a href="question-paper.php?state=wb">West
                                                        Bengal University of Health Sciences</a></li>
                                                <li><a href="question-paper.php?state=wb">West
                                                        Bengal University of Teachers' Training,
                                                        Education Planning and
                                                        Administration</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Other States
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">Tripura
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=wb">Sikkim
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=wb">Manipur
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=wb">Mizoram
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=wb">Nagaland
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=wb">NEHU
                                                        Shillong</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu-col">
                                    <div class="mega-col-header">
                                        <h3>All Central Universities</h3>
                                        <div class="mega-search-wrapper">
                                            <i class="fas fa-search"></i>
                                            <input type="text" class="mega-search-input"
                                                placeholder="Search All Central Universities...">
                                        </div>
                                    </div>
                                    <ul>
                                        <li>
                                            Andhra Pradesh
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=ap">Central
                                                        University of Andhra Pradesh</a></li>
                                                <li><a href="question-paper.php?state=ap">National
                                                        Sanskrit University</a></li>
                                                <li><a href="question-paper.php?state=ap">Central
                                                        Tribal University of A.P.</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Arunachal Pradesh
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=ap">Rajiv
                                                        Gandhi University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Assam
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=as">Assam
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=as">Tezpur
                                                        University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Bihar
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=br">Central
                                                        University of South Bihar</a></li>
                                                <li><a href="question-paper.php?state=br">Mahatma
                                                        Gandhi Central University</a></li>
                                                <li><a href="question-paper.php?state=br">Nalanda
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=br">Dr.
                                                        Rajendra Prasad Central Agriculture
                                                        University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Chhattisgarh
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=cg">Guru
                                                        Ghasidas Vishwavidyalaya</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Delhi
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=dl">University
                                                        of Delhi (DU)</a></li>
                                                <li><a href="question-paper.php?state=dl">Jawaharlal
                                                        Nehru University (JNU)</a></li>
                                                <li><a href="question-paper.php?state=dl">Jamia
                                                        Millia Islamia (JMI)</a></li>
                                                <li><a href="question-paper.php?state=dl">IGNOU</a>
                                                </li>
                                                <li><a href="question-paper.php?state=dl">South
                                                        Asian University</a></li>
                                                <li><a href="question-paper.php?state=dl">Central
                                                        Sanskrit University</a></li>
                                                <li><a href="question-paper.php?state=dl">Shri
                                                        Lal Bahadur Shastri National Sanskrit
                                                        University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Gujarat
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=gj">Central
                                                        University of Gujarat</a></li>
                                                <li><a href="question-paper.php?state=gj">Gati
                                                        Shakti Vishwavidyalaya</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Haryana
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=hr">Central
                                                        University of Haryana</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Himachal Pradesh
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=hp">Central
                                                        University of Himachal Pradesh</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Jammu and Kashmir
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=jk">Central
                                                        University of Jammu</a></li>
                                                <li><a href="question-paper.php?state=jk">Central
                                                        University of Kashmir</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Jharkhand
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=jh">Central
                                                        University of Jharkhand</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Karnataka
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=ka">Central
                                                        University of Karnataka</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Kerala
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=kl">Central
                                                        University of Kerala</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Madhya Pradesh
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=mp">Dr.
                                                        Hari Singh Gour University</a></li>
                                                <li><a href="question-paper.php?state=mp">Indira
                                                        Gandhi National Tribal University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Maharashtra
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=mh">Mahatma
                                                        Gandhi Antarrashtriya Hindi Vishwavidyalaya</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Manipur
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">Manipur
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=wb">Central
                                                        Agricultural University</a></li>
                                                <li><a href="question-paper.php?state=wb">National
                                                        Sports University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Meghalaya
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">North-Eastern
                                                        Hill University (NEHU)</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Mizoram
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">Mizoram
                                                        University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Nagaland
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">Nagaland
                                                        University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Odisha
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=od">Central
                                                        University of Odisha</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Puducherry
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">Pondicherry
                                                        University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Punjab
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=pb">Central
                                                        University of Punjab</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Rajasthan
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=rj">Central
                                                        University of Rajasthan</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Sikkim
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">Sikkim
                                                        University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Tamil Nadu
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=tn">Central
                                                        University of Tamil Nadu</a></li>
                                                <li><a href="question-paper.php?state=tn">Indian
                                                        Maritime University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Telangana
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=ts">University
                                                        of Hyderabad</a></li>
                                                <li><a href="question-paper.php?state=ts">Maulana
                                                        Azad National Urdu University</a></li>
                                                <li><a href="question-paper.php?state=ts">English
                                                        and Foreign Languages University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Tripura
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">Tripura
                                                        University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Uttar Pradesh
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=up">Aligarh
                                                        Muslim University (AMU)</a></li>
                                                <li><a href="question-paper.php?state=up">Banaras
                                                        Hindu University (BHU)</a></li>
                                                <li><a href="question-paper.php?state=up">Babasaheb
                                                        Bhimrao Ambedkar University (BBAU)</a></li>
                                                <li><a href="question-paper.php?state=up">University
                                                        of Allahabad</a></li>
                                                <li><a href="question-paper.php?state=up">Rajiv
                                                        Gandhi National Aviation University</a></li>
                                                <li><a href="question-paper.php?state=up">Rani
                                                        Lakshmi Bai Central Agricultural University</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Uttarakhand
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=uk">Hemvati
                                                        Nandan Bahuguna Garhwal University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            West Bengal
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">Visva-Bharati
                                                        University</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu-col">
                                    <div class="mega-col-header">
                                        <h3>All Government Exams</h3>
                                        <div class="mega-search-wrapper">
                                            <i class="fas fa-search"></i>
                                            <input type="text" class="mega-search-input" placeholder="Search All Government Exams...">
                                        </div>
                                    </div>
                                    <ul>
                                        <li>
                                            SSC Exams
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">SSC CGL</a></li>
                                                <li><a href="javascript:void(0);">SSC CHSL</a></li>
                                                <li><a href="javascript:void(0);">SSC MTS</a></li>
                                                <li><a href="javascript:void(0);">SSC GD Constable</a></li>
                                                <li><a href="javascript:void(0);">SSC JE</a></li>
                                                <li><a href="javascript:void(0);">SSC CPO</a></li>
                                                <li><a href="javascript:void(0);">SSC Stenographer</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Banking Exams
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">IBPS PO</a></li>
                                                <li><a href="javascript:void(0);">IBPS Clerk</a></li>
                                                <li><a href="javascript:void(0);">IBPS Specialist Officer</a></li>
                                                <li><a href="javascript:void(0);">SBI PO</a></li>
                                                <li><a href="javascript:void(0);">SBI Clerk</a></li>
                                                <li><a href="javascript:void(0);">RBI Assistant</a></li>
                                                <li><a href="javascript:void(0);">RBI Grade B</a></li>
                                                <li><a href="javascript:void(0);">NABARD Grade A/B</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Railway Exams
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">RRB NTPC</a></li>
                                                <li><a href="javascript:void(0);">RRB Group D</a></li>
                                                <li><a href="javascript:void(0);">RRB ALP</a></li>
                                                <li><a href="javascript:void(0);">RRB JE</a></li>
                                                <li><a href="javascript:void(0);">RRB Technician</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Police Exams
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">UP Police</a></li>
                                                <li><a href="javascript:void(0);">Bihar Police</a></li>
                                                <li><a href="javascript:void(0);">Rajasthan Police</a></li>
                                                <li><a href="javascript:void(0);">CAPF AC/ASPC</a></li>
                                                <li><a href="javascript:void(0);">BSF Constable</a></li>
                                                <li><a href="javascript:void(0);">CISF</a></li>
                                                <li><a href="javascript:void(0);">CRPF</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Defence Exams
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">NDA</a></li>
                                                <li><a href="javascript:void(0);">CDS</a></li>
                                                <li><a href="javascript:void(0);">AFCAT</a></li>
                                                <li><a href="javascript:void(0);">Indian Coast Guard</a></li>
                                                <li><a href="javascript:void(0);">TES (Technical Entry)</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Teaching & Education
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">CTET</a></li>
                                                <li><a href="javascript:void(0);">TET (State-Level)</a></li>
                                                <li><a href="javascript:void(0);">UGC NET / CSIR NET</a></li>
                                                <li><a href="javascript:void(0);">State Teacher Exams (HTET, STET, etc.)</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            UPSC & PSC Exams
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">UPSC Civil Services (IAS/IPS/IFS)</a></li>
                                                <li><a href="javascript:void(0);">UPSC EPFO</a></li>
                                                <li><a href="javascript:void(0);">UPSC Combined Geo-Scientist</a></li>
                                                <li><a href="javascript:void(0);">State PSC Exams (UPPSC, MPPSC, BPSC, etc.)</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Other Govt Jobs
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">Postal Circle Jobs</a></li>
                                                <li><a href="javascript:void(0);">Technical Govt Recruitment Exams</a></li>
                                                <li><a href="javascript:void(0);">Junior Engineer / Assistant Engineer</a></li>
                                                <li><a href="javascript:void(0);">Bank Insurance Jobs (LIC AAO, GIC, UIIC)</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu-col">
                                    <div class="mega-col-header">
                                        <h3>All Entrance Exams</h3>
                                        <div class="mega-search-wrapper">
                                            <i class="fas fa-search"></i>
                                            <input type="text" class="mega-search-input" placeholder="Search All Entrance Exams...">
                                        </div>
                                    </div>
                                    <ul>
                                        <li>
                                            Engineering
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">JEE Main</a></li>
                                                <li><a href="javascript:void(0);">JEE Advanced</a></li>
                                                <li><a href="javascript:void(0);">BITSAT</a></li>
                                                <li><a href="javascript:void(0);">VITEEE</a></li>
                                                <li><a href="javascript:void(0);">SRMJEEE</a></li>
                                                <li><a href="javascript:void(0);">COMEDK UGET</a></li>
                                                <li><a href="javascript:void(0);">KIITEE</a></li>
                                                <li><a href="javascript:void(0);">WBJEE</a></li>
                                                <li><a href="javascript:void(0);">MHT-CET</a></li>
                                                <li><a href="javascript:void(0);">KEAM</a></li>
                                                <li><a href="javascript:void(0);">AP EAMCET</a></li>
                                                <li><a href="javascript:void(0);">TS EAMCET</a></li>
                                                <li><a href="javascript:void(0);">TNEA</a></li>
                                                <li><a href="javascript:void(0);">OJEE</a></li>
                                                <li><a href="javascript:void(0);">UPSEE</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            Medical
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">NEET UG</a></li>
                                                <li><a href="javascript:void(0);">NEET PG</a></li>
                                                <li><a href="javascript:void(0);">AIIMS MBBS</a></li>
                                                <li><a href="javascript:void(0);">AIIMS PG</a></li>
                                                <li><a href="javascript:void(0);">JIPMER MBBS</a></li>
                                                <li><a href="javascript:void(0);">AFMC Entrance</a></li>
                                                <li><a href="javascript:void(0);">State-Level Medical Exams (KEAM, KCET, OJEE)</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            Management
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">CAT</a></li>
                                                <li><a href="javascript:void(0);">XAT</a></li>
                                                <li><a href="javascript:void(0);">MAT</a></li>
                                                <li><a href="javascript:void(0);">CMAT</a></li>
                                                <li><a href="javascript:void(0);">SNAP</a></li>
                                                <li><a href="javascript:void(0);">NMAT by GMAC</a></li>
                                                <li><a href="javascript:void(0);">ATMA</a></li>
                                                <li><a href="javascript:void(0);">MAH CET</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            Law
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">CLAT</a></li>
                                                <li><a href="javascript:void(0);">AILET</a></li>
                                                <li><a href="javascript:void(0);">LSAT India</a></li>
                                                <li><a href="javascript:void(0);">MHCET Law</a></li>
                                                <li><a href="javascript:void(0);">PU Law Entrance</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            University & PG
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">CUET UG</a></li>
                                                <li><a href="javascript:void(0);">CUET PG</a></li>
                                                <li><a href="javascript:void(0);">Delhi University Entrance</a></li>
                                                <li><a href="javascript:void(0);">IGNOU Entrance</a></li>
                                                <li><a href="javascript:void(0);">BHU UET/PET</a></li>
                                                <li><a href="javascript:void(0);">Banaras Hindu University Entrance</a></li>
                                                <li><a href="javascript:void(0);">Jamia Millia Islamia Entrance</a></li>
                                                <li><a href="javascript:void(0);">AMU Entrance</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            Defence
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">NDA</a></li>
                                                <li><a href="javascript:void(0);">CDS</a></li>
                                                <li><a href="javascript:void(0);">AFCAT</a></li>
                                                <li><a href="javascript:void(0);">Indian Coast Guard Entrance</a></li>
                                                <li><a href="javascript:void(0);">SSB Interview</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            Banking
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">IBPS PO</a></li>
                                                <li><a href="javascript:void(0);">IBPS Clerk</a></li>
                                                <li><a href="javascript:void(0);">SBI PO</a></li>
                                                <li><a href="javascript:void(0);">SBI Clerk</a></li>
                                                <li><a href="javascript:void(0);">RBI Assistant/Grade B</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            Government Job Exams
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">SSC CGL</a></li>
                                                <li><a href="javascript:void(0);">SSC CHSL</a></li>
                                                <li><a href="javascript:void(0);">SSC MTS</a></li>
                                                <li><a href="javascript:void(0);">SSC JE</a></li>
                                                <li><a href="javascript:void(0);">SSC GD Constable</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            Railways
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">RRB NTPC</a></li>
                                                <li><a href="javascript:void(0);">RRB Group D</a></li>
                                                <li><a href="javascript:void(0);">RRB ALP</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            Teaching & Education
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">CTET</a></li>
                                                <li><a href="javascript:void(0);">TET (State-Level)</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            Design & Fashion
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">NATA</a></li>
                                                <li><a href="javascript:void(0);">UCEED</a></li>
                                                <li><a href="javascript:void(0);">CEED</a></li>
                                                <li><a href="javascript:void(0);">NID DAT</a></li>
                                                <li><a href="javascript:void(0);">NIFT Entrance</a></li>
                                                <li><a href="javascript:void(0);">AIEED</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            Agriculture & Forestry
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">ICAR AIEEA</a></li>
                                                <li><a href="javascript:void(0);">IARI Entrance</a></li>
                                                <li><a href="javascript:void(0);">AFMC</a></li>
                                                <li><a href="javascript:void(0);">FRI Entrance</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            Hotel & Hospitality
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">NCHM JEE</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="syllabus.php">Syllabus</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="admission.php">Admission</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="scholarship.php">Scholarship</a>
                    </li>

                    <li class="nav-item has-mega-menu">
                        <a class="nav-link" href="question-paper.php">Question Paper <i class="fas fa-chevron-down ms-1"></i></a>
                        <div class="mega-menu">
                            <div class="mega-menu-content">
                                <div class="mega-menu-col">
                                    <div class="mega-col-header">
                                        <h3>All Boards</h3>
                                        <div class="mega-search-wrapper">
                                            <i class="fas fa-search"></i>
                                            <input type="text" class="mega-search-input"
                                                placeholder="Search All Boards...">
                                        </div>
                                    </div>
                                    <ul>
                                        <li>
                                            Central / National
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">CBSE
                                                        Board</a></li>
                                                <li><a href="question-paper.php?state=wb">ICSE
                                                        / ISC Board</a></li>
                                                <li><a href="question-paper.php?state=wb">NIOS</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Andhra Pradesh
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=ap">BSEAP
                                                        (10th)</a></li>
                                                <li><a href="question-paper.php?state=ap">BIEAP
                                                        (12th)</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Assam
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=as">SEBA
                                                        (10th)</a></li>
                                                <li><a href="question-paper.php?state=as">AHSEC
                                                        (12th)</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Bihar
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=br">BSEB
                                                        (Bihar Board)</a></li>
                                                <li><a href="question-paper.php?state=br">BBOSE
                                                        (Open Board)</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Chhattisgarh
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=cg">CGBSE</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            Goa
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">GBSHSE</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Gujarat
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=gj">GSEB</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Haryana
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=hr">HBSE
                                                        (BSEH)</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Himachal Pradesh
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=hp">HPBOSE</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Jharkhand
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=jh">JAC
                                                        Board</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Karnataka
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=ka">KSEAB
                                                        (SSLC)</a></li>
                                                <li><a href="question-paper.php?state=ka">DPUE
                                                        (PUC)</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Kerala
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=kl">KBPE
                                                        (SSLC)</a></li>
                                                <li><a href="question-paper.php?state=kl">DHSE
                                                        (Plus Two)</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Madhya Pradesh
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=mp">MPBSE
                                                        (MP Board)</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Maharashtra
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=mh">MSBSHSE</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Manipur
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">BSEM</a>
                                                </li>
                                                <li><a href="question-paper.php?state=wb">COHSEM</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Meghalaya
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">MBOSE</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Mizoram
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">MBSE</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Nagaland
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">NBSE</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Odisha
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=od">BSE
                                                        Odisha</a></li>
                                                <li><a href="question-paper.php?state=od">CHSE
                                                        Odisha</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Punjab
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=pb">PSEB</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Rajasthan
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=rj">RBSE
                                                        (BSER)</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Tamil Nadu
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=tn">DGE
                                                        TN (SSLC / HSC)</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Telangana
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=ts">BSE
                                                        Telangana</a></li>
                                                <li><a href="question-paper.php?state=ts">TSBIE</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Tripura
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">TBSE</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Uttar Pradesh
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=up">UPMSP
                                                        (UP Board)</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Uttarakhand
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=uk">UBSE</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            West Bengal
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">WBBSE</a>
                                                </li>
                                                <li><a href="question-paper.php?state=wb">WBCHSE</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu-col">
                                    <div class="mega-col-header">
                                        <h3>All State Universities</h3>
                                        <div class="mega-search-wrapper">
                                            <i class="fas fa-search"></i>
                                            <input type="text" class="mega-search-input"
                                                placeholder="Search All State Universities...">
                                        </div>
                                    </div>
                                    <ul>
                                        <li>
                                            Andhra Pradesh
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=ap">Acharya
                                                        Nagarjuna University</a></li>
                                                <li><a href="question-paper.php?state=ap">Adikavi
                                                        Nannaya University</a></li>
                                                <li><a href="question-paper.php?state=ap">Andhra
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ap">Damodaram
                                                        Sanjivayya National Law University</a></li>
                                                <li><a href="question-paper.php?state=ap">Dr.
                                                        Abdul Haq Urdu University</a></li>
                                                <li><a href="question-paper.php?state=ap">Dr.
                                                        B.R. Ambedkar University</a></li>
                                                <li><a href="question-paper.php?state=ap">Dr.
                                                        Y.S.R. Horticultural University</a></li>
                                                <li><a href="question-paper.php?state=ap">Dravidian
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ap">Jawaharlal
                                                        Nehru Technological University, Anantapur</a>
                                                </li>
                                                <li><a href="question-paper.php?state=ap">Jawaharlal
                                                        Nehru Technological University, Kakinada</a>
                                                </li>
                                                <li><a href="question-paper.php?state=ap">Krishna
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ap">Rayalaseema
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ap">Sri
                                                        Krishnadevaraya University</a></li>
                                                <li><a href="question-paper.php?state=ap">Sri
                                                        Padmavati Mahila Visvavidyalayam</a></li>
                                                <li><a href="question-paper.php?state=ap">Sri
                                                        Venkateswara Institute of Medical Sciences</a>
                                                </li>
                                                <li><a href="question-paper.php?state=ap">Sri
                                                        Venkateswara University</a></li>
                                                <li><a href="question-paper.php?state=ap">Sri
                                                        Venkateswara Veterinary University</a></li>
                                                <li><a href="question-paper.php?state=ap">Vikrama
                                                        Simhapuri University</a></li>
                                                <li><a href="question-paper.php?state=ap">Yogi
                                                        Vemana University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Arunachal Pradesh
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=ap">Arunachal
                                                        University of Studies</a></li>
                                                <li><a href="question-paper.php?state=ap">Rajiv
                                                        Gandhi University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Assam
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=as">Assam
                                                        Agricultural University</a></li>
                                                <li><a href="question-paper.php?state=as">Assam
                                                        Rajiv Gandhi University of Cooperative
                                                        Management</a></li>
                                                <li><a href="question-paper.php?state=as">Assam
                                                        Science and Technology University</a></li>
                                                <li><a href="question-paper.php?state=as">Assam
                                                        Women's University</a></li>
                                                <li><a href="question-paper.php?state=as">Bodoland
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=as">Cotton
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=as">Dibrugarh
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=as">Gauhati
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=as">Kumar
                                                        Bhaskar Varma Sanskrit and Ancient Studies
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=as">Majuli
                                                        University of Culture</a></li>
                                                <li><a href="question-paper.php?state=as">National
                                                        Law University and Judicial Academy</a></li>
                                                <li><a href="question-paper.php?state=as">Srimanta
                                                        Sankaradeva University of Health Sciences</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Bihar
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=br">Aryabhatta
                                                        Knowledge University</a></li>
                                                <li><a href="question-paper.php?state=br">Babasaheb
                                                        Bhimrao Ambedkar Bihar University</a></li>
                                                <li><a href="question-paper.php?state=br">Bhupendra
                                                        Narayan Mandal University</a></li>
                                                <li><a href="question-paper.php?state=br">Bihar
                                                        Agricultural University</a></li>
                                                <li><a href="question-paper.php?state=br">Chanakya
                                                        National Law University</a></li>
                                                <li><a href="question-paper.php?state=br">Jai
                                                        Prakash University</a></li>
                                                <li><a href="question-paper.php?state=br">Kameshwar
                                                        Singh Darbhanga Sanskrit University</a></li>
                                                <li><a href="question-paper.php?state=br">Lalit
                                                        Narayan Mithila University</a></li>
                                                <li><a href="question-paper.php?state=br">Magadh
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=br">Maulana
                                                        Mazharul Haque Arabic and Persian University</a>
                                                </li>
                                                <li><a href="question-paper.php?state=br">Munger
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=br">Nalanda
                                                        Open University</a></li>
                                                <li><a href="question-paper.php?state=br">Patna
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=br">Purnea
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=br">Tilka
                                                        Manjhi Bhagalpur University</a></li>
                                                <li><a href="question-paper.php?state=br">Veer
                                                        Kunwar Singh University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Chhattisgarh
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=cg">Ayush
                                                        and Health Sciences University of
                                                        Chhattisgarh</a></li>
                                                <li><a href="question-paper.php?state=cg">Bastar
                                                        Vishwavidyalaya</a></li>
                                                <li><a href="question-paper.php?state=cg">Bilaspur
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=cg">Chhattisgarh
                                                        Kamdhenu Vishwavidyalaya</a></li>
                                                <li><a href="question-paper.php?state=cg">Chhattisgarh
                                                        Swami Vivekanand Technical University</a></li>
                                                <li><a href="question-paper.php?state=cg">Hidayatullah
                                                        National Law University</a></li>
                                                <li><a href="question-paper.php?state=cg">Indira
                                                        Gandhi Agricultural University</a></li>
                                                <li><a href="question-paper.php?state=cg">Indira
                                                        Kala Sangeet Vishwavidyalaya</a></li>
                                                <li><a href="question-paper.php?state=cg">Kushabhau
                                                        Thakre Patrakarita Avam Jansanchar
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=cg">Pandit
                                                        Ravishankar Shukla University</a></li>
                                                <li><a href="question-paper.php?state=cg">Sarguja
                                                        University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Delhi
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=dl">Ambedkar
                                                        University Delhi</a></li>
                                                <li><a href="question-paper.php?state=dl">Delhi
                                                        Pharmaceutical Sciences and Research
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=dl">Delhi
                                                        Technological University</a></li>
                                                <li><a href="question-paper.php?state=dl">Guru
                                                        Gobind Singh Indraprastha University</a></li>
                                                <li><a href="question-paper.php?state=dl">Indira
                                                        Gandhi Delhi Technical University for Women</a>
                                                </li>
                                                <li><a href="question-paper.php?state=dl">Indraprastha
                                                        Institute of Information Technology</a></li>
                                                <li><a href="question-paper.php?state=dl">National
                                                        Law University</a></li>
                                                <li><a href="question-paper.php?state=dl">Netaji
                                                        Subhas University of Technology</a></li>
                                                <li><a href="question-paper.php?state=dl">Delhi
                                                        Teachers University</a></li>
                                                <li><a href="question-paper.php?state=dl">Delhi
                                                        Skill and Entrepreneurship University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Goa
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">Goa
                                                        University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Gujarat
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=gj">Anand
                                                        Agricultural University</a></li>
                                                <li><a href="question-paper.php?state=gj">Bhakta
                                                        Kavi Narsinh Mehta University</a></li>
                                                <li><a href="question-paper.php?state=gj">Birsa
                                                        Munda Tribal University</a></li>
                                                <li><a href="question-paper.php?state=gj">Centre
                                                        for Environmental Planning and Technology
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=gj">Dharmsinh
                                                        Desai University</a></li>
                                                <li><a href="question-paper.php?state=gj">Dr.
                                                        Babasaheb Ambedkar Open University</a></li>
                                                <li><a href="question-paper.php?state=gj">Gujarat
                                                        Ayurved University</a></li>
                                                <li><a href="question-paper.php?state=gj">Gujarat
                                                        Forensic Sciences University</a></li>
                                                <li><a href="question-paper.php?state=gj">Gujarat
                                                        National Law University</a></li>
                                                <li><a href="question-paper.php?state=gj">Gujarat
                                                        Technological University</a></li>
                                                <li><a href="question-paper.php?state=gj">Gujarat
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=gj">Gujarat
                                                        Vidyapith</a></li>
                                                <li><a href="question-paper.php?state=gj">Hemchandracharya
                                                        North Gujarat University</a></li>
                                                <li><a href="question-paper.php?state=gj">Indian
                                                        Institute of Teacher Education</a></li>
                                                <li><a href="question-paper.php?state=gj">Indubhai
                                                        Parekh School of Architecture</a></li>
                                                <li><a href="question-paper.php?state=gj">Junagadh
                                                        Agricultural University</a></li>
                                                <li><a href="question-paper.php?state=gj">Krantiguru
                                                        Shyamji Krishna Verma Kachchh University</a>
                                                </li>
                                                <li><a href="question-paper.php?state=gj">Maharaja
                                                        Krishnakumarsinhji Bhavnagar University</a></li>
                                                <li><a href="question-paper.php?state=gj">Navsari
                                                        Agricultural University</a></li>
                                                <li><a href="question-paper.php?state=gj">Raksha
                                                        Shakti University</a></li>
                                                <li><a href="question-paper.php?state=gj">Sardarkrushinagar
                                                        Dantiwada Agricultural University</a></li>
                                                <li><a href="question-paper.php?state=gj">Saurashtra
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=gj">Shree
                                                        Somnath Sanskrit University</a></li>
                                                <li><a href="question-paper.php?state=gj">Swarnim
                                                        Gujarat Sports University</a></li>
                                                <li><a href="question-paper.php?state=gj">Teachers
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=gj">The
                                                        Maharaja Sayajirao University of Baroda</a></li>
                                                <li><a href="question-paper.php?state=gj">Veer
                                                        Narmad South Gujarat University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Haryana
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=hr">Bhagat
                                                        Phool Singh Mahila Vishwavidyalaya</a></li>
                                                <li><a href="question-paper.php?state=hr">Chaudhary
                                                        Bansi Lal University</a></li>
                                                <li><a href="question-paper.php?state=hr">Chaudhary
                                                        Charan Singh Haryana Agricultural University</a>
                                                </li>
                                                <li><a href="question-paper.php?state=hr">Chaudhary
                                                        Devi Lal University</a></li>
                                                <li><a href="question-paper.php?state=hr">Chaudhary
                                                        Ranbir Singh University</a></li>
                                                <li><a href="question-paper.php?state=hr">Deenbandhu
                                                        Chhotu Ram University of Science and
                                                        Technology</a></li>
                                                <li><a href="question-paper.php?state=hr">Guru
                                                        Jambheshwar University of Science and
                                                        Technology</a></li>
                                                <li><a href="question-paper.php?state=hr">Indira
                                                        Gandhi University</a></li>
                                                <li><a href="question-paper.php?state=hr">Kurukshetra
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=hr">Lala
                                                        Lajpat Rai University of Veterinary and Animal
                                                        Sciences</a></li>
                                                <li><a href="question-paper.php?state=hr">Maharshi
                                                        Dayanand University</a></li>
                                                <li><a href="question-paper.php?state=hr">Pandit
                                                        Bhagwat Dayal Sharma University of Health
                                                        Sciences</a></li>
                                                <li><a href="question-paper.php?state=hr">State
                                                        University of Performing and Visual Arts</a>
                                                </li>
                                                <li><a href="question-paper.php?state=hr">YMCA
                                                        University of Science and Technology</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Himachal Pradesh
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=hp">Chaudhary
                                                        Sarwan Kumar Himachal Pradesh Krishi
                                                        Vishvavidyalaya</a></li>
                                                <li><a href="question-paper.php?state=hp">Dr.
                                                        Yashwant Singh Parmar University of Horticulture
                                                        and Forestry</a>
                                                </li>
                                                <li><a href="question-paper.php?state=hp">Himachal
                                                        Pradesh Technical University</a></li>
                                                <li><a href="question-paper.php?state=hp">Himachal
                                                        Pradesh University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Jharkhand
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=jh">Binod
                                                        Bihari Mahto Koyalanchal University</a></li>
                                                <li><a href="question-paper.php?state=jh">Birsa
                                                        Agricultural University</a></li>
                                                <li><a href="question-paper.php?state=jh">Dr.
                                                        Shyama Prasad Mukherjee University</a></li>
                                                <li><a href="question-paper.php?state=jh">Jharkhand
                                                        Raksha Shakti University</a></li>
                                                <li><a href="question-paper.php?state=jh">Kolhan
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=jh">National
                                                        University of Study and Research in Law</a></li>
                                                <li><a href="question-paper.php?state=jh">Nilamber-Pitamber
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=jh">Ranchi
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=jh">Sido
                                                        Kanhu Murmu University</a></li>
                                                <li><a href="question-paper.php?state=jh">Vinoba
                                                        Bhave University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Karnataka
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=ka">Bangalore
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ka">Davangere
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ka">Gulbarga
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ka">Kannada
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ka">Karnatak
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ka">Karnataka
                                                        State Law University</a></li>
                                                <li><a href="question-paper.php?state=ka">Karnataka
                                                        State Open University</a></li>
                                                <li><a href="question-paper.php?state=ka">Karnataka
                                                        State Women's University</a></li>
                                                <li><a href="question-paper.php?state=ka">Karnataka
                                                        Veterinary, Animal and Fisheries Sciences
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ka">Kuvempu
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ka">Mangalore
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ka">Mysore
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ka">National
                                                        Law School of India University</a></li>
                                                <li><a href="question-paper.php?state=ka">Rajiv
                                                        Gandhi University of Health Sciences</a></li>
                                                <li><a href="question-paper.php?state=ka">Rani
                                                        Channamma University</a></li>
                                                <li><a href="question-paper.php?state=ka">Tumkur
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ka">University
                                                        of Agricultural Sciences, Bangalore</a></li>
                                                <li><a href="question-paper.php?state=ka">University
                                                        of Agricultural Sciences, Dharwad</a></li>
                                                <li><a href="question-paper.php?state=ka">University
                                                        of Agricultural Sciences, Raichur</a></li>
                                                <li><a href="question-paper.php?state=ka">University
                                                        of Horticultural Sciences, Bagalkot</a></li>
                                                <li><a href="question-paper.php?state=ka">Visvesvaraya
                                                        Technological University</a></li>
                                                <li><a href="question-paper.php?state=ka">Vijayanagara
                                                        Sri Krishnadevaraya University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Kerala
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=kl">APJ
                                                        Abdul Kalam Technological University</a></li>
                                                <li><a href="question-paper.php?state=kl">Cochin
                                                        University of Science and Technology</a></li>
                                                <li><a href="question-paper.php?state=kl">Kannur
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=kl">Kerala
                                                        Agricultural University</a></li>
                                                <li><a href="question-paper.php?state=kl">Kerala
                                                        University of Fisheries and Ocean Studies</a>
                                                </li>
                                                <li><a href="question-paper.php?state=kl">Kerala
                                                        University of Health Sciences</a></li>
                                                <li><a href="question-paper.php?state=kl">Kerala
                                                        Veterinary and Animal Sciences University</a>
                                                </li>
                                                <li><a href="question-paper.php?state=kl">Mahatma
                                                        Gandhi University</a></li>
                                                <li><a href="question-paper.php?state=kl">National
                                                        University of Advanced Legal Studies</a></li>
                                                <li><a href="question-paper.php?state=kl">Sree
                                                        Sankaracharya University of Sanskrit</a></li>
                                                <li><a href="question-paper.php?state=kl">Thunchath
                                                        Ezhuthachan Malayalam University</a></li>
                                                <li><a href="question-paper.php?state=kl">University
                                                        of Calicut</a></li>
                                                <li><a href="question-paper.php?state=kl">University
                                                        of Kerala</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Madhya Pradesh
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=mp">Atal
                                                        Bihari Vajpayee Hindi Vishwavidyalaya</a></li>
                                                <li><a href="question-paper.php?state=mp">Awadesh
                                                        Pratap Singh University</a></li>
                                                <li><a href="question-paper.php?state=mp">Barkatullah
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=mp">Devi
                                                        Ahilya Vishwavidyalaya</a></li>
                                                <li><a href="question-paper.php?state=mp">Dr.
                                                        B.R. Ambedkar University of Social Sciences</a>
                                                </li>
                                                <li><a href="question-paper.php?state=mp">Jawaharlal
                                                        Nehru Krishi Vishwavidyalaya</a></li>
                                                <li><a href="question-paper.php?state=mp">Jiwaji
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=mp">Madhya
                                                        Pradesh Medical Science University</a></li>
                                                <li><a href="question-paper.php?state=mp">Maharishi
                                                        Panini Sanskrit Evam Vedic Vishwavidyalaya</a>
                                                </li>
                                                <li><a href="question-paper.php?state=mp">Mahatma
                                                        Gandhi Chitrakoot Gramoday Vishwavidyalaya</a>
                                                </li>
                                                <li><a href="question-paper.php?state=mp">Makhanlal
                                                        Chaturvedi National University of Journalism and
                                                        Communication</a>
                                                </li>
                                                <li><a href="question-paper.php?state=mp">Nanaji
                                                        Deshmukh Veterinary Science University</a></li>
                                                <li><a href="question-paper.php?state=mp">National
                                                        Law Institute University</a></li>
                                                <li><a href="question-paper.php?state=mp">Rajmata
                                                        Vijayaraje Scindia Krishi Vishwavidyalaya</a>
                                                </li>
                                                <li><a href="question-paper.php?state=mp">Rani
                                                        Durgavati Vishwavidyalaya</a></li>
                                                <li><a href="question-paper.php?state=mp">Rajiv
                                                        Gandhi Proudyogiki Vishwavidyalaya</a></li>
                                                <li><a href="question-paper.php?state=mp">Sanchi
                                                        University of Buddhist-Indic Studies</a></li>
                                                <li><a href="question-paper.php?state=mp">Vikram
                                                        University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Maharashtra
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=mh">Dr.
                                                        Babasaheb Ambedkar Marathwada University</a>
                                                </li>
                                                <li><a href="question-paper.php?state=mh">Dr.
                                                        Babasaheb Ambedkar Technological University</a>
                                                </li>
                                                <li><a href="question-paper.php?state=mh">Dr.
                                                        Panjabrao Deshmukh Krishi Vidyapeeth</a></li>
                                                <li><a href="question-paper.php?state=mh">Gondwana
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=mh">Kavi
                                                        Kulguru Kalidas Sanskrit University</a></li>
                                                <li><a href="question-paper.php?state=mh">Maharashtra
                                                        Animal and Fishery Sciences University</a></li>
                                                <li><a href="question-paper.php?state=mh">Maharashtra
                                                        University of Health Sciences</a></li>
                                                <li><a href="question-paper.php?state=mh">Mahatma
                                                        Phule Krishi Vidyapeeth</a></li>
                                                <li><a href="question-paper.php?state=mh">Marathwada
                                                        Agricultural University</a></li>
                                                <li><a href="question-paper.php?state=mh">Mumbai
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=mh">North
                                                        Maharashtra University</a></li>
                                                <li><a href="question-paper.php?state=mh">Rashtrasant
                                                        Tukadoji Maharaj Nagpur University</a></li>
                                                <li><a href="question-paper.php?state=mh">Sant
                                                        Gadge Baba Amravati University</a></li>
                                                <li><a href="question-paper.php?state=mh">Shivaji
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=mh">Shreemati
                                                        Nathibai Damodar Thackersey Women's
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=mh">Solapur
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=mh">Swami
                                                        Ramanand Teerth Marathwada University</a></li>
                                                <li><a href="question-paper.php?state=mh">Savitribai
                                                        Phule Pune University</a></li>
                                                <li><a href="question-paper.php?state=mh">Yashwantrao
                                                        Chavan Maharashtra Open University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Odisha
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=od">Berhampur
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=od">Biju
                                                        Patnaik University of Technology</a></li>
                                                <li><a href="question-paper.php?state=od">Fakir
                                                        Mohan University</a></li>
                                                <li><a href="question-paper.php?state=od">Gangadhar
                                                        Meher University</a></li>
                                                <li><a href="question-paper.php?state=od">Khallikote
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=od">National
                                                        Law University Odisha</a></li>
                                                <li><a href="question-paper.php?state=od">North
                                                        Orissa University</a></li>
                                                <li><a href="question-paper.php?state=od">Odisha
                                                        State Open University</a></li>
                                                <li><a href="question-paper.php?state=od">Odisha
                                                        University of Agriculture and Technology</a>
                                                </li>
                                                <li><a href="question-paper.php?state=od">Rama
                                                        Devi Women's University</a></li>
                                                <li><a href="question-paper.php?state=od">Ravenshaw
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=od">Sambalpur
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=od">Shri
                                                        Jagannath Sanskrit Vishvavidyalaya</a></li>
                                                <li><a href="question-paper.php?state=od">Utkal
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=od">Utkal
                                                        University of Culture</a></li>
                                                <li><a href="question-paper.php?state=od">Veer
                                                        Surendra Sai University of Technology</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Punjab
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=pb">Baba
                                                        Farid University of Health Sciences</a></li>
                                                <li><a href="question-paper.php?state=pb">Guru
                                                        Angad Dev Veterinary and Animal Sciences
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=pb">Guru
                                                        Nanak Dev University</a></li>
                                                <li><a href="question-paper.php?state=pb">Guru
                                                        Ravidas Ayurved University</a></li>
                                                <li><a href="question-paper.php?state=pb">I.
                                                        K. Gujral Punjab Technical University</a></li>
                                                <li><a href="question-paper.php?state=pb">Maharaja
                                                        Ranjit Singh Punjab Technical University</a>
                                                </li>
                                                <li><a href="question-paper.php?state=pb">Panjab
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=pb">Punjab
                                                        Agricultural University</a></li>
                                                <li><a href="question-paper.php?state=pb">Punjabi
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=pb">Rajiv
                                                        Gandhi National University of Law</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Rajasthan
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=rj">Agriculture
                                                        University, Jodhpur</a></li>
                                                <li><a href="question-paper.php?state=rj">Agriculture
                                                        University, Kota</a></li>
                                                <li><a href="question-paper.php?state=rj">Dr.
                                                        Sarvepalli Radhakrishnan Rajasthan Ayurved
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=rj">Govind
                                                        Guru Tribal University</a></li>
                                                <li><a href="question-paper.php?state=rj">Haridev
                                                        Joshi University of Journalism and Mass
                                                        Communication</a></li>
                                                <li><a href="question-paper.php?state=rj">Jagadguru
                                                        Ramanandacharya Rajasthan Sanskrit
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=rj">Jai
                                                        Narain Vyas University</a></li>
                                                <li><a href="question-paper.php?state=rj">Maharaja
                                                        Ganga Singh University</a></li>
                                                <li><a href="question-paper.php?state=rj">Maharaja
                                                        Surajmal Brij University</a></li>
                                                <li><a href="question-paper.php?state=rj">Maharana
                                                        Pratap University of Agriculture and
                                                        Technology</a></li>
                                                <li><a href="question-paper.php?state=rj">Maharshi
                                                        Dayanand Saraswati University</a></li>
                                                <li><a href="question-paper.php?state=rj">Mohanlal
                                                        Sukhadia University</a></li>
                                                <li><a href="question-paper.php?state=rj">National
                                                        Law University, Jodhpur</a></li>
                                                <li><a href="question-paper.php?state=rj">Pandit
                                                        Deendayal Upadhyaya Shekhawati University</a>
                                                </li>
                                                <li><a href="question-paper.php?state=rj">Raj
                                                        Rishi Bhartrihari Matsya University</a></li>
                                                <li><a href="question-paper.php?state=rj">Rajasthan
                                                        Technical University</a></li>
                                                <li><a href="question-paper.php?state=rj">Rajasthan
                                                        University of Health Sciences</a></li>
                                                <li><a href="question-paper.php?state=rj">Rajasthan
                                                        University of Veterinary and Animal Sciences</a>
                                                </li>
                                                <li><a href="question-paper.php?state=rj">Swami
                                                        Keshwanand Rajasthan Agricultural University</a>
                                                </li>
                                                <li><a href="question-paper.php?state=rj">University
                                                        of Kota</a></li>
                                                <li><a href="question-paper.php?state=rj">University
                                                        of Rajasthan</a></li>
                                                <li><a href="question-paper.php?state=rj">Vardhaman
                                                        Mahaveer Open University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Tamil Nadu
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=tn">Alagappa
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=tn">Anna
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=tn">Annamalai
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=tn">Bharathiar
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=tn">Bharathidasan
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=tn">Madurai
                                                        Kamaraj University</a></li>
                                                <li><a href="question-paper.php?state=tn">Manonmaniam
                                                        Sundaranar University</a></li>
                                                <li><a href="question-paper.php?state=tn">Mother
                                                        Teresa Women's University</a></li>
                                                <li><a href="question-paper.php?state=tn">Periyar
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=tn">Tamil
                                                        Nadu Agricultural University</a></li>
                                                <li><a href="question-paper.php?state=tn">Tamil
                                                        Nadu Dr. Ambedkar Law University</a></li>
                                                <li><a href="question-paper.php?state=tn">Tamil
                                                        Nadu Dr. M.G.R. Medical University</a></li>
                                                <li><a href="question-paper.php?state=tn">Tamil
                                                        Nadu Fisheries University</a></li>
                                                <li><a href="question-paper.php?state=tn">Tamil
                                                        Nadu Music and Fine Arts University</a></li>
                                                <li><a href="question-paper.php?state=tn">Tamil
                                                        Nadu National Law School</a></li>
                                                <li><a href="question-paper.php?state=tn">Tamil
                                                        Nadu Open University</a></li>
                                                <li><a href="question-paper.php?state=tn">Tamil
                                                        Nadu Physical Education and Sports
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=tn">Tamil
                                                        Nadu Teachers Education University</a></li>
                                                <li><a href="question-paper.php?state=tn">Tamil
                                                        Nadu Veterinary and Animal Sciences
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=tn">Tamil
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=tn">Thiruvalluvar
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=tn">University
                                                        of Madras</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Telangana
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=ts">Dr.
                                                        B.R. Ambedkar Open University</a></li>
                                                <li><a href="question-paper.php?state=ts">Jawaharlal
                                                        Nehru Architecture and Fine Arts University</a>
                                                </li>
                                                <li><a href="question-paper.php?state=ts">Jawaharlal
                                                        Nehru Technological University, Hyderabad</a>
                                                </li>
                                                <li><a href="question-paper.php?state=ts">Kakatiya
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ts">Kaloji
                                                        Narayana Rao University of Health Sciences</a>
                                                </li>
                                                <li><a href="question-paper.php?state=ts">Mahatma
                                                        Gandhi University, Nalgonda</a></li>
                                                <li><a href="question-paper.php?state=ts">Osmania
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ts">Palamuru
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ts">Potti
                                                        Sreeramulu Telugu University</a></li>
                                                <li><a href="question-paper.php?state=ts">Prof.
                                                        Jayashankar Telangana State Agricultural
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ts">Rajiv
                                                        Gandhi University of Knowledge Technologies</a>
                                                </li>
                                                <li><a href="question-paper.php?state=ts">Satavahana
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ts">Sri
                                                        Konda Laxman Telangana State Horticultural
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=ts">Telangana
                                                        University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Uttar Pradesh
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=up">Allahabad
                                                        State University</a></li>
                                                <li><a href="question-paper.php?state=up">Banda
                                                        University of Agriculture and Technology</a>
                                                </li>
                                                <li><a href="question-paper.php?state=up">Bundelkhand
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=up">Chandra
                                                        Shekhar Azad University of Agriculture and
                                                        Technology</a></li>
                                                <li><a href="question-paper.php?state=up">Chaudhary
                                                        Charan Singh University</a></li>
                                                <li><a href="question-paper.php?state=up">Chhatrapati
                                                        Shahu Ji Maharaj University (Kanpur Univ)</a>
                                                </li>
                                                <li><a href="question-paper.php?state=up">Deen
                                                        Dayal Upadhyay Gorakhpur University</a></li>
                                                <li><a href="question-paper.php?state=up">Dr.
                                                        A.P.J. Abdul Kalam Technical University</a></li>
                                                <li><a href="question-paper.php?state=up">Dr.
                                                        B. R. Ambedkar University</a></li>
                                                <li><a href="question-paper.php?state=up">Dr.
                                                        Ram Manohar Lohia Avadh University</a></li>
                                                <li><a href="question-paper.php?state=up">Dr.
                                                        Ram Manohar Lohia National Law University</a>
                                                </li>
                                                <li><a href="question-paper.php?state=up">Dr.
                                                        Shakuntala Misra National Rehabilitation
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=up">Gautam
                                                        Buddha University</a></li>
                                                <li><a href="question-paper.php?state=up">Khwaja
                                                        Moinuddin Chishti Language University</a></li>
                                                <li><a href="question-paper.php?state=up">King
                                                        George's Medical University</a></li>
                                                <li><a href="question-paper.php?state=up">Lucknow
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=up">Madan
                                                        Mohan Malaviya University of Technology</a></li>
                                                <li><a href="question-paper.php?state=up">Mahatma
                                                        Gandhi Kashi Vidyapith</a></li>
                                                <li><a href="question-paper.php?state=up">Mahatma
                                                        Jyotiba Phule Rohilkhand University</a></li>
                                                <li><a href="question-paper.php?state=up">Narendra
                                                        Dev University of Agriculture and Technology</a>
                                                </li>
                                                <li><a href="question-paper.php?state=up">Prof.
                                                        Rajendra Singh (Rajju Bhaiya) University</a>
                                                </li>
                                                <li><a href="question-paper.php?state=up">Sampurnanand
                                                        Sanskrit Vishwavidyalaya</a></li>
                                                <li><a href="question-paper.php?state=up">Sardar
                                                        Vallabhbhai Patel University of Agriculture and
                                                        Technology</a></li>
                                                <li><a href="question-paper.php?state=up">Siddharth
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=up">U.P.
                                                        Pt. Deen Dayal Upadhyaya Pashu Chikitsa Vigyan
                                                        Vishwavidyalaya Evam
                                                        Go-Anusandhan Sansthan</a></li>
                                                <li><a href="question-paper.php?state=up">Uttar
                                                        Pradesh University of Medical Sciences</a></li>
                                                <li><a href="question-paper.php?state=up">Veer
                                                        Bahadur Singh Purvanchal University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Uttarakhand
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=uk">Doon
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=uk">G.
                                                        B. Pant University of Agriculture and
                                                        Technology</a></li>
                                                <li><a href="question-paper.php?state=uk">Hemwati
                                                        Nandan Bahuguna Medical Education University</a>
                                                </li>
                                                <li><a href="question-paper.php?state=uk">Kumaun
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=uk">Sri
                                                        Dev Suman Uttarakhand University</a></li>
                                                <li><a href="question-paper.php?state=uk">Uttarakhand
                                                        Ayurved University</a></li>
                                                <li><a href="question-paper.php?state=uk">Uttarakhand
                                                        Open University</a></li>
                                                <li><a href="question-paper.php?state=uk">Uttarakhand
                                                        Sanskrit University</a></li>
                                                <li><a href="question-paper.php?state=uk">Uttarakhand
                                                        Technical University</a></li>
                                                <li><a href="question-paper.php?state=uk">Uttarakhand
                                                        University of Horticulture and Forestry</a></li>
                                                <li><a href="question-paper.php?state=uk">VCSG
                                                        Uttarakhand University of Horticulture and
                                                        Forestry</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            West Bengal
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">Aliah
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=wb">Bankura
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=wb">Bidhan
                                                        Chandra Krishi Viswavidyalaya</a></li>
                                                <li><a href="question-paper.php?state=wb">Burdwan
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=wb">Calcutta
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=wb">Cooch
                                                        Behar Panchanan Barma University</a></li>
                                                <li><a href="question-paper.php?state=wb">Diamond
                                                        Harbour Women's University</a></li>
                                                <li><a href="question-paper.php?state=wb">Jadavpur
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=wb">Kalyani
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=wb">Kazi
                                                        Nazrul University</a></li>
                                                <li><a href="question-paper.php?state=wb">Maulana
                                                        Abul Kalam Azad University of Technology</a>
                                                </li>
                                                <li><a href="question-paper.php?state=wb">Netaji
                                                        Subhas Open University</a></li>
                                                <li><a href="question-paper.php?state=wb">North
                                                        Bengal University</a></li>
                                                <li><a href="question-paper.php?state=wb">Presidency
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=wb">Rabindra
                                                        Bharati University</a></li>
                                                <li><a href="question-paper.php?state=wb">Raiganj
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=wb">Sidho
                                                        Kanho Birsha University</a></li>
                                                <li><a href="question-paper.php?state=wb">Sanskrit
                                                        College and University</a></li>
                                                <li><a href="question-paper.php?state=wb">Vidyasagar
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=wb">West
                                                        Bengal State University</a></li>
                                                <li><a href="question-paper.php?state=wb">West
                                                        Bengal University of Animal and Fishery
                                                        Sciences</a></li>
                                                <li><a href="question-paper.php?state=wb">West
                                                        Bengal University of Health Sciences</a></li>
                                                <li><a href="question-paper.php?state=wb">West
                                                        Bengal University of Teachers' Training,
                                                        Education Planning and
                                                        Administration</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Other States
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">Tripura
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=wb">Sikkim
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=wb">Manipur
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=wb">Mizoram
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=wb">Nagaland
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=wb">NEHU
                                                        Shillong</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu-col">
                                    <div class="mega-col-header">
                                        <h3>All Central Universities</h3>
                                        <div class="mega-search-wrapper">
                                            <i class="fas fa-search"></i>
                                            <input type="text" class="mega-search-input"
                                                placeholder="Search All Central Universities...">
                                        </div>
                                    </div>
                                    <ul>
                                        <li>
                                            Andhra Pradesh
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=ap">Central
                                                        University of Andhra Pradesh</a></li>
                                                <li><a href="question-paper.php?state=ap">National
                                                        Sanskrit University</a></li>
                                                <li><a href="question-paper.php?state=ap">Central
                                                        Tribal University of A.P.</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Arunachal Pradesh
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=ap">Rajiv
                                                        Gandhi University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Assam
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=as">Assam
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=as">Tezpur
                                                        University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Bihar
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=br">Central
                                                        University of South Bihar</a></li>
                                                <li><a href="question-paper.php?state=br">Mahatma
                                                        Gandhi Central University</a></li>
                                                <li><a href="question-paper.php?state=br">Nalanda
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=br">Dr.
                                                        Rajendra Prasad Central Agriculture
                                                        University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Chhattisgarh
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=cg">Guru
                                                        Ghasidas Vishwavidyalaya</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Delhi
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=dl">University
                                                        of Delhi (DU)</a></li>
                                                <li><a href="question-paper.php?state=dl">Jawaharlal
                                                        Nehru University (JNU)</a></li>
                                                <li><a href="question-paper.php?state=dl">Jamia
                                                        Millia Islamia (JMI)</a></li>
                                                <li><a href="question-paper.php?state=dl">IGNOU</a>
                                                </li>
                                                <li><a href="question-paper.php?state=dl">South
                                                        Asian University</a></li>
                                                <li><a href="question-paper.php?state=dl">Central
                                                        Sanskrit University</a></li>
                                                <li><a href="question-paper.php?state=dl">Shri
                                                        Lal Bahadur Shastri National Sanskrit
                                                        University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Gujarat
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=gj">Central
                                                        University of Gujarat</a></li>
                                                <li><a href="question-paper.php?state=gj">Gati
                                                        Shakti Vishwavidyalaya</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Haryana
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=hr">Central
                                                        University of Haryana</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Himachal Pradesh
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=hp">Central
                                                        University of Himachal Pradesh</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Jammu and Kashmir
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=jk">Central
                                                        University of Jammu</a></li>
                                                <li><a href="question-paper.php?state=jk">Central
                                                        University of Kashmir</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Jharkhand
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=jh">Central
                                                        University of Jharkhand</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Karnataka
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=ka">Central
                                                        University of Karnataka</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Kerala
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=kl">Central
                                                        University of Kerala</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Madhya Pradesh
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=mp">Dr.
                                                        Hari Singh Gour University</a></li>
                                                <li><a href="question-paper.php?state=mp">Indira
                                                        Gandhi National Tribal University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Maharashtra
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=mh">Mahatma
                                                        Gandhi Antarrashtriya Hindi Vishwavidyalaya</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Manipur
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">Manipur
                                                        University</a></li>
                                                <li><a href="question-paper.php?state=wb">Central
                                                        Agricultural University</a></li>
                                                <li><a href="question-paper.php?state=wb">National
                                                        Sports University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Meghalaya
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">North-Eastern
                                                        Hill University (NEHU)</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Mizoram
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">Mizoram
                                                        University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Nagaland
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">Nagaland
                                                        University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Odisha
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=od">Central
                                                        University of Odisha</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Puducherry
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">Pondicherry
                                                        University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Punjab
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=pb">Central
                                                        University of Punjab</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Rajasthan
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=rj">Central
                                                        University of Rajasthan</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Sikkim
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">Sikkim
                                                        University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Tamil Nadu
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=tn">Central
                                                        University of Tamil Nadu</a></li>
                                                <li><a href="question-paper.php?state=tn">Indian
                                                        Maritime University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Telangana
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=ts">University
                                                        of Hyderabad</a></li>
                                                <li><a href="question-paper.php?state=ts">Maulana
                                                        Azad National Urdu University</a></li>
                                                <li><a href="question-paper.php?state=ts">English
                                                        and Foreign Languages University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Tripura
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">Tripura
                                                        University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Uttar Pradesh
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=up">Aligarh
                                                        Muslim University (AMU)</a></li>
                                                <li><a href="question-paper.php?state=up">Banaras
                                                        Hindu University (BHU)</a></li>
                                                <li><a href="question-paper.php?state=up">Babasaheb
                                                        Bhimrao Ambedkar University (BBAU)</a></li>
                                                <li><a href="question-paper.php?state=up">University
                                                        of Allahabad</a></li>
                                                <li><a href="question-paper.php?state=up">Rajiv
                                                        Gandhi National Aviation University</a></li>
                                                <li><a href="question-paper.php?state=up">Rani
                                                        Lakshmi Bai Central Agricultural University</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Uttarakhand
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=uk">Hemvati
                                                        Nandan Bahuguna Garhwal University</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            West Bengal
                                            <ul class="nested-menu">
                                                <li><a href="question-paper.php?state=wb">Visva-Bharati
                                                        University</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu-col">
                                    <div class="mega-col-header">
                                        <h3>All Government Exams</h3>
                                        <div class="mega-search-wrapper">
                                            <i class="fas fa-search"></i>
                                            <input type="text" class="mega-search-input" placeholder="Search All Government Exams...">
                                        </div>
                                    </div>
                                    <ul>
                                        <li>
                                            SSC Exams
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">SSC CGL</a></li>
                                                <li><a href="javascript:void(0);">SSC CHSL</a></li>
                                                <li><a href="javascript:void(0);">SSC MTS</a></li>
                                                <li><a href="javascript:void(0);">SSC GD Constable</a></li>
                                                <li><a href="javascript:void(0);">SSC JE</a></li>
                                                <li><a href="javascript:void(0);">SSC CPO</a></li>
                                                <li><a href="javascript:void(0);">SSC Stenographer</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Banking Exams
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">IBPS PO</a></li>
                                                <li><a href="javascript:void(0);">IBPS Clerk</a></li>
                                                <li><a href="javascript:void(0);">IBPS Specialist Officer</a></li>
                                                <li><a href="javascript:void(0);">SBI PO</a></li>
                                                <li><a href="javascript:void(0);">SBI Clerk</a></li>
                                                <li><a href="javascript:void(0);">RBI Assistant</a></li>
                                                <li><a href="javascript:void(0);">RBI Grade B</a></li>
                                                <li><a href="javascript:void(0);">NABARD Grade A/B</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Railway Exams
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">RRB NTPC</a></li>
                                                <li><a href="javascript:void(0);">RRB Group D</a></li>
                                                <li><a href="javascript:void(0);">RRB ALP</a></li>
                                                <li><a href="javascript:void(0);">RRB JE</a></li>
                                                <li><a href="javascript:void(0);">RRB Technician</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Police Exams
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">UP Police</a></li>
                                                <li><a href="javascript:void(0);">Bihar Police</a></li>
                                                <li><a href="javascript:void(0);">Rajasthan Police</a></li>
                                                <li><a href="javascript:void(0);">CAPF AC/ASPC</a></li>
                                                <li><a href="javascript:void(0);">BSF Constable</a></li>
                                                <li><a href="javascript:void(0);">CISF</a></li>
                                                <li><a href="javascript:void(0);">CRPF</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Defence Exams
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">NDA</a></li>
                                                <li><a href="javascript:void(0);">CDS</a></li>
                                                <li><a href="javascript:void(0);">AFCAT</a></li>
                                                <li><a href="javascript:void(0);">Indian Coast Guard</a></li>
                                                <li><a href="javascript:void(0);">TES (Technical Entry)</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Teaching & Education
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">CTET</a></li>
                                                <li><a href="javascript:void(0);">TET (State-Level)</a></li>
                                                <li><a href="javascript:void(0);">UGC NET / CSIR NET</a></li>
                                                <li><a href="javascript:void(0);">State Teacher Exams (HTET, STET, etc.)</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            UPSC & PSC Exams
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">UPSC Civil Services (IAS/IPS/IFS)</a></li>
                                                <li><a href="javascript:void(0);">UPSC EPFO</a></li>
                                                <li><a href="javascript:void(0);">UPSC Combined Geo-Scientist</a></li>
                                                <li><a href="javascript:void(0);">State PSC Exams (UPPSC, MPPSC, BPSC, etc.)</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            Other Govt Jobs
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">Postal Circle Jobs</a></li>
                                                <li><a href="javascript:void(0);">Technical Govt Recruitment Exams</a></li>
                                                <li><a href="javascript:void(0);">Junior Engineer / Assistant Engineer</a></li>
                                                <li><a href="javascript:void(0);">Bank Insurance Jobs (LIC AAO, GIC, UIIC)</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu-col">
                                    <div class="mega-col-header">
                                        <h3>All Entrance Exams</h3>
                                        <div class="mega-search-wrapper">
                                            <i class="fas fa-search"></i>
                                            <input type="text" class="mega-search-input" placeholder="Search All Entrance Exams...">
                                        </div>
                                    </div>
                                    <ul>
                                        <li>
                                            Engineering
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">JEE Main</a></li>
                                                <li><a href="javascript:void(0);">JEE Advanced</a></li>
                                                <li><a href="javascript:void(0);">BITSAT</a></li>
                                                <li><a href="javascript:void(0);">VITEEE</a></li>
                                                <li><a href="javascript:void(0);">SRMJEEE</a></li>
                                                <li><a href="javascript:void(0);">COMEDK UGET</a></li>
                                                <li><a href="javascript:void(0);">KIITEE</a></li>
                                                <li><a href="javascript:void(0);">WBJEE</a></li>
                                                <li><a href="javascript:void(0);">MHT-CET</a></li>
                                                <li><a href="javascript:void(0);">KEAM</a></li>
                                                <li><a href="javascript:void(0);">AP EAMCET</a></li>
                                                <li><a href="javascript:void(0);">TS EAMCET</a></li>
                                                <li><a href="javascript:void(0);">TNEA</a></li>
                                                <li><a href="javascript:void(0);">OJEE</a></li>
                                                <li><a href="javascript:void(0);">UPSEE</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            Medical
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">NEET UG</a></li>
                                                <li><a href="javascript:void(0);">NEET PG</a></li>
                                                <li><a href="javascript:void(0);">AIIMS MBBS</a></li>
                                                <li><a href="javascript:void(0);">AIIMS PG</a></li>
                                                <li><a href="javascript:void(0);">JIPMER MBBS</a></li>
                                                <li><a href="javascript:void(0);">AFMC Entrance</a></li>
                                                <li><a href="javascript:void(0);">State-Level Medical Exams (KEAM, KCET, OJEE)</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            Management
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">CAT</a></li>
                                                <li><a href="javascript:void(0);">XAT</a></li>
                                                <li><a href="javascript:void(0);">MAT</a></li>
                                                <li><a href="javascript:void(0);">CMAT</a></li>
                                                <li><a href="javascript:void(0);">SNAP</a></li>
                                                <li><a href="javascript:void(0);">NMAT by GMAC</a></li>
                                                <li><a href="javascript:void(0);">ATMA</a></li>
                                                <li><a href="javascript:void(0);">MAH CET</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            Law
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">CLAT</a></li>
                                                <li><a href="javascript:void(0);">AILET</a></li>
                                                <li><a href="javascript:void(0);">LSAT India</a></li>
                                                <li><a href="javascript:void(0);">MHCET Law</a></li>
                                                <li><a href="javascript:void(0);">PU Law Entrance</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            University & PG
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">CUET UG</a></li>
                                                <li><a href="javascript:void(0);">CUET PG</a></li>
                                                <li><a href="javascript:void(0);">Delhi University Entrance</a></li>
                                                <li><a href="javascript:void(0);">IGNOU Entrance</a></li>
                                                <li><a href="javascript:void(0);">BHU UET/PET</a></li>
                                                <li><a href="javascript:void(0);">Banaras Hindu University Entrance</a></li>
                                                <li><a href="javascript:void(0);">Jamia Millia Islamia Entrance</a></li>
                                                <li><a href="javascript:void(0);">AMU Entrance</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            Defence
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">NDA</a></li>
                                                <li><a href="javascript:void(0);">CDS</a></li>
                                                <li><a href="javascript:void(0);">AFCAT</a></li>
                                                <li><a href="javascript:void(0);">Indian Coast Guard Entrance</a></li>
                                                <li><a href="javascript:void(0);">SSB Interview</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            Banking
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">IBPS PO</a></li>
                                                <li><a href="javascript:void(0);">IBPS Clerk</a></li>
                                                <li><a href="javascript:void(0);">SBI PO</a></li>
                                                <li><a href="javascript:void(0);">SBI Clerk</a></li>
                                                <li><a href="javascript:void(0);">RBI Assistant/Grade B</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            Government Job Exams
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">SSC CGL</a></li>
                                                <li><a href="javascript:void(0);">SSC CHSL</a></li>
                                                <li><a href="javascript:void(0);">SSC MTS</a></li>
                                                <li><a href="javascript:void(0);">SSC JE</a></li>
                                                <li><a href="javascript:void(0);">SSC GD Constable</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            Railways
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">RRB NTPC</a></li>
                                                <li><a href="javascript:void(0);">RRB Group D</a></li>
                                                <li><a href="javascript:void(0);">RRB ALP</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            Teaching & Education
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">CTET</a></li>
                                                <li><a href="javascript:void(0);">TET (State-Level)</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            Design & Fashion
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">NATA</a></li>
                                                <li><a href="javascript:void(0);">UCEED</a></li>
                                                <li><a href="javascript:void(0);">CEED</a></li>
                                                <li><a href="javascript:void(0);">NID DAT</a></li>
                                                <li><a href="javascript:void(0);">NIFT Entrance</a></li>
                                                <li><a href="javascript:void(0);">AIEED</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            Agriculture & Forestry
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">ICAR AIEEA</a></li>
                                                <li><a href="javascript:void(0);">IARI Entrance</a></li>
                                                <li><a href="javascript:void(0);">AFMC</a></li>
                                                <li><a href="javascript:void(0);">FRI Entrance</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            Hotel & Hospitality
                                            <ul class="nested-menu">
                                                <li><a href="javascript:void(0);">NCHM JEE</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="yojana.php">Yojana</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="document.php">Document</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>