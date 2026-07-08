<?php include_once("include/header.php") ?>

<main>

    <section class="popular-categories">
        <div class="container">
            <div class="section-header">
                <h3 class="section-title">Popular Categories</h3>
                <p class="section-subtitle">Explore the latest opportunities by category</p>
            </div>
            <div class="tabs-container">
                <div class="category-tabs-wrapper nav" id="categoryTabs" role="tablist">
                    <button class="category-btn active" id="jobs-tab" data-bs-toggle="tab" data-bs-target="#jobs" type="button" role="tab" aria-controls="jobs" aria-selected="true" data-type="jobs">
                        <i class="fas fa-briefcase"></i> Jobs
                    </button>
                    <button class="category-btn" id="results-tab" data-bs-toggle="tab" data-bs-target="#results" type="button" role="tab" aria-controls="results" aria-selected="false" data-type="results">
                        <i class="fas fa-trophy"></i> Results
                    </button>
                    <button class="category-btn" id="admitcard-tab" data-bs-toggle="tab" data-bs-target="#admitcard" type="button" role="tab" aria-controls="admitcard" aria-selected="false" data-type="admitcard">
                        <i class="fas fa-id-card"></i> Admit Card
                    </button>
                    <button class="category-btn" id="answerkey-tab" data-bs-toggle="tab" data-bs-target="#answerkey" type="button" role="tab" aria-controls="answerkey" aria-selected="false" data-type="answerkey">
                        <i class="fas fa-key"></i> Answer Key
                    </button>
                    <button class="category-btn" id="syllabus-tab" data-bs-toggle="tab" data-bs-target="#syllabus" type="button" role="tab" aria-controls="syllabus" aria-selected="false" data-type="syllabus">
                        <i class="fas fa-book"></i> Syllabus
                    </button>
                    <button class="category-btn" id="admission-tab" data-bs-toggle="tab" data-bs-target="#admission" type="button" role="tab" aria-controls="admission" aria-selected="false" data-type="admission">
                        <i class="fas fa-graduation-cap"></i> Admission
                    </button>
                    <button class="category-btn" id="scholarship-tab" data-bs-toggle="tab" data-bs-target="#scholarship" type="button" role="tab" aria-controls="scholarship" aria-selected="false" data-type="scholarship">
                        <i class="fas fa-medal"></i> Scholarship
                    </button>
                    <button class="category-btn" id="questionpaper-tab" data-bs-toggle="tab" data-bs-target="#questionpaper" type="button" role="tab" aria-controls="questionpaper" aria-selected="false" data-type="questionpaper">
                        <i class="fas fa-file-lines"></i> Question Paper
                    </button>
                    <button class="category-btn" id="yojana-tab" data-bs-toggle="tab" data-bs-target="#yojana" type="button" role="tab" aria-controls="yojana" aria-selected="false" data-type="yojana">
                        <i class="fas fa-hands-holding-heart"></i> Yojana
                    </button>
                    <button class="category-btn" id="document-tab" data-bs-toggle="tab" data-bs-target="#document" type="button" role="tab" aria-controls="document" aria-selected="false" data-type="document">
                        <i class="fas fa-file"></i> Document
                    </button>
                </div>
            </div>
            <div class="section-toolbar">
                <h2 class="section-title mb-0" id="sectionHeading">Jobs</h2>
                <div class="filter-box">
                    <select class="category-select">
                        <option>Most Popular</option>
                        <option>Alphabetical (A-Z)</option>
                        <option>Newest First</option>
                    </select>
                    <div class="divider"></div>
                    <button class="view-btn active-view">
                        <i class="fas fa-th-large"></i>
                    </button>
                    <button class="view-btn">
                        <i class="fas fa-list"></i>
                    </button>
                </div>
            </div>

            <div class="tab-content" id="categoryTabContent">
                <!-- Jobs Tab Pane -->
                <div class="tab-pane fade show active" id="jobs" role="tabpanel" aria-labelledby="jobs-tab">
                    <div class="row g-4">
                        <div class="col-12 text-primary">
                            <h4 class="sub-header">State Government Jobs</h4>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-landmark"></i>
                                    </div>
                                    <div class="job-count">
                                        12,450 Jobs
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        Maharashtra
                                    </div>
                                    <a href="state-page.php" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-mosque"></i>
                                    </div>
                                    <div class="job-count">
                                        8,220 Jobs
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        Karnataka
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-archway"></i>
                                    </div>
                                    <div class="job-count">
                                        5,900 Jobs
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        Delhi
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-gopuram"></i>
                                    </div>
                                    <div class="job-count">
                                        6,800 Jobs
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        Gujarat
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 text-success mt-4">
                            <h4 class="sub-header">Central Government Jobs</h4>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-clipboard-list"></i>
                                    </div>
                                    <div class="job-count">
                                        2,450 Jobs
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        SSC
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-university"></i>
                                    </div>
                                    <div class="job-count">
                                        350 Jobs
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        UPSC
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-train"></i>
                                    </div>
                                    <div class="job-count">
                                        1,220 Jobs
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        Railways
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-university"></i>
                                    </div>
                                    <div class="job-count">
                                        950 Jobs
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        Banking
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Results Tab Pane -->
                <div class="tab-pane fade" id="results" role="tabpanel" aria-labelledby="results-tab">
                    <div class="row g-4">
                        <div class="col-12 text-primary">
                            <h4 class="sub-header">State Government Results</h4>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-landmark"></i>
                                    </div>
                                    <div class="job-count">
                                        1,250 Results
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        Maharashtra
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-gopuram"></i>
                                    </div>
                                    <div class="job-count">
                                        2,340 Results
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        UP
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-archway"></i>
                                    </div>
                                    <div class="job-count">
                                        1,560 Results
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        Bihar
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 text-success mt-4">
                            <h4 class="sub-header">Central Government Results</h4>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-clipboard-list"></i>
                                    </div>
                                    <div class="job-count">
                                        Released
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        SSC CGL
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-university"></i>
                                    </div>
                                    <div class="job-count">
                                        Released
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        UPSC
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-train"></i>
                                    </div>
                                    <div class="job-count">
                                        Released
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        RRB
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Admit Card Tab Pane -->
                <div class="tab-pane fade" id="admitcard" role="tabpanel" aria-labelledby="admitcard-tab">
                    <div class="row g-4">
                        <div class="col-12 text-primary">
                            <h4 class="sub-header">State Government Admit Cards</h4>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-landmark"></i>
                                    </div>
                                    <div class="job-count">
                                        520 Admit Cards
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        UP
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-archway"></i>
                                    </div>
                                    <div class="job-count">
                                        410 Admit Cards
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        Rajasthan
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 text-success mt-4">
                            <h4 class="sub-header">Central Government Admit Cards</h4>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-clipboard-list"></i>
                                    </div>
                                    <div class="job-count">
                                        Available
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        SSC GD
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-train"></i>
                                    </div>
                                    <div class="job-count">
                                        Available
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        RRB NTPC
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Answer Key Tab Pane -->
                <div class="tab-pane fade" id="answerkey" role="tabpanel" aria-labelledby="answerkey-tab">
                    <div class="row g-4">
                        <div class="col-12 text-primary">
                            <h4 class="sub-header">State Government Answer Keys</h4>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-landmark"></i>
                                    </div>
                                    <div class="job-count">
                                        520 Answer Keys
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        UP
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-archway"></i>
                                    </div>
                                    <div class="job-count">
                                        410 Answer Keys
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        Rajasthan
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 text-success mt-4">
                            <h4 class="sub-header">Central Government Answer Keys</h4>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-clipboard-list"></i>
                                    </div>
                                    <div class="job-count">
                                        Available
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        SSC GD
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-train"></i>
                                    </div>
                                    <div class="job-count">
                                        Available
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        RRB NTPC
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Syllabus Tab Pane -->
                <div class="tab-pane fade" id="syllabus" role="tabpanel" aria-labelledby="syllabus-tab">
                    <div class="row g-4">
                        <div class="col-12 text-primary">
                            <h4 class="sub-header">State Government Syllabus</h4>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-book"></i>
                                    </div>
                                    <div class="job-count">
                                        220 Syllabus
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        UP
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-book-reader"></i>
                                    </div>
                                    <div class="job-count">
                                        150 Syllabus
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        Delhi
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 text-success mt-4">
                            <h4 class="sub-header">Central Government Syllabus</h4>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-file-alt"></i>
                                    </div>
                                    <div class="job-count">
                                        Updated
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        SSC
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-book"></i>
                                    </div>
                                    <div class="job-count">
                                        Updated
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        UPSC
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Admission Tab Pane -->
                <div class="tab-pane fade" id="admission" role="tabpanel" aria-labelledby="admission-tab">
                    <div class="row g-4">
                        <div class="col-12 text-primary">
                            <h4 class="sub-header">State Government Admissions</h4>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                    <div class="job-count">
                                        120 Admissions
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        Delhi
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-school"></i>
                                    </div>
                                    <div class="job-count">
                                        95 Admissions
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        Karnataka
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 text-success mt-4">
                            <h4 class="sub-header">Central Government Admissions</h4>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                    <div class="job-count">
                                        45 Admissions
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        NTA
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-school"></i>
                                    </div>
                                    <div class="job-count">
                                        60 Admissions
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        CUET
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Scholarship Tab Pane -->
                <div class="tab-pane fade" id="scholarship" role="tabpanel" aria-labelledby="scholarship-tab">
                    <div class="row g-4">
                        <div class="col-12 text-primary">
                            <h4 class="sub-header">State Government Scholarships</h4>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-award"></i>
                                    </div>
                                    <div class="job-count">
                                        80 Scholarships
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        UP
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-medal"></i>
                                    </div>
                                    <div class="job-count">
                                        50 Scholarships
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        Bihar
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 text-success mt-4">
                            <h4 class="sub-header">Central Government Scholarships</h4>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-trophy"></i>
                                    </div>
                                    <div class="job-count">
                                        120 Scholarships
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        NSP
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-award"></i>
                                    </div>
                                    <div class="job-count">
                                        45 Scholarships
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        UGC
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Question Paper Tab Pane -->
                <div class="tab-pane fade" id="questionpaper" role="tabpanel" aria-labelledby="questionpaper-tab">
                    <div class="row g-4">
                        <div class="col-12 text-primary">
                            <h4 class="sub-header">State Government Question Papers</h4>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-award"></i>
                                    </div>
                                    <div class="job-count">
                                        80 Question Papers
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        UP
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-medal"></i>
                                    </div>
                                    <div class="job-count">
                                        50 Question Papers
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        Bihar
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 text-success mt-4">
                            <h4 class="sub-header">Central Government Question Papers</h4>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-trophy"></i>
                                    </div>
                                    <div class="job-count">
                                        120 Question Papers
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        NSP
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-award"></i>
                                    </div>
                                    <div class="job-count">
                                        45 Question Papers
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        UGC
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Yojana Tab Pane -->
                <div class="tab-pane fade" id="yojana" role="tabpanel" aria-labelledby="yojana-tab">
                    <div class="row g-4">
                        <div class="col-12 text-primary">
                            <h4 class="sub-header">State Government Schemes</h4>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-handshake"></i>
                                    </div>
                                    <div class="job-count">
                                        45 Schemes
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        Gujarat
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-landmark"></i>
                                    </div>
                                    <div class="job-count">
                                        70 Schemes
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        MP
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 text-success mt-4">
                            <h4 class="sub-header">Central Government Schemes</h4>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-tractor"></i>
                                    </div>
                                    <div class="job-count">
                                        Active
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        PM Kisan
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-home"></i>
                                    </div>
                                    <div class="job-count">
                                        Active
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        PMAY
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Document Tab Pane -->
                <div class="tab-pane fade" id="document" role="tabpanel" aria-labelledby="document-tab">
                    <div class="row g-4">
                        <div class="col-12 text-primary">
                            <h4 class="sub-header">State Government Document</h4>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-handshake"></i>
                                    </div>
                                    <div class="job-count">
                                        45 Document
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        Gujarat
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-landmark"></i>
                                    </div>
                                    <div class="job-count">
                                        70 Document
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        MP
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 text-success mt-4">
                            <h4 class="sub-header">Central Government Document</h4>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-tractor"></i>
                                    </div>
                                    <div class="job-count">
                                        Active
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        PM Kisan
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="state-card">
                                <div class="state-top">
                                    <div class="state-icon">
                                        <i class="fas fa-home"></i>
                                    </div>
                                    <div class="job-count">
                                        Active
                                    </div>
                                </div>
                                <div class="state-bottom">
                                    <div class="state-name">
                                        PMAY
                                    </div>
                                    <a href="javascript:void(0);" class="view-jobs">
                                        View Details
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ads" id="adsBanner">
        <div class="container">
            <div class="ads-box">
                <button class="ads-close" onclick="closeAds()"><i class="far fa-times"></i></button>
                <div class="ads-label">Ad</div>
                <img src="img/ads2.jpg" alt="Advertisement" class="img-fluid">
            </div>
        </div>
    </section>

    <section class="state-map">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="map-section">
                        <div id="map"></div>
                        <div class="map-title">
                            <div class="map-card">
                                <div class="icon-box">
                                    <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 12L10 5V9H20.2C20.48 9 20.62 9 20.727 9.0545C20.8211 9.10243 20.8976 9.17892 20.9455 9.273C21 9.37996 21 9.51997 21 9.8V14.2C21 14.48 21 14.62 20.9455 14.727C20.8976 14.8211 20.8211 14.8976 20.727 14.9455C20.62 15 20.48 15 20.2 15H10V19L3 12Z" stroke="#2563EB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="text-content">
                                    <div class="title">Browse By State</div>
                                    <div class="subtitle">Click any state on the map</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="map-info-card">
                        <h4 class="info-heading">How it works</h4>
                        <div class="info-list">
                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="far fa-location-dot"></i>
                                </div>
                                <div class="info-content">
                                    <h5>Select Your State</h5>
                                    <p>Choose any state from the interactive map.</p>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="far fa-folder-open"></i>
                                </div>
                                <div class="info-content">
                                    <h5>Explore State Updates</h5>
                                    <p>Access Jobs, Results, Admit Cards, Admissions, Scholarships and Schemes.</p>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="far fa-bell"></i>
                                </div>
                                <div class="info-content">
                                    <h5>Stay Updated</h5>
                                    <p>Find the latest opportunities and notifications relevant to your state.</p>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-info-card">
                            <div class="bottom-info-top">
                                <div class="bottom-info-icon">
                                    <i class="fas fa-landmark"></i>
                                </div>
                                <h5>All State Updates in One Place</h5>
                            </div>
                            <p>Explore government jobs, education updates, scholarships and welfare schemes across India.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once("include/footer.php") ?>