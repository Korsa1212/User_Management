<!-- Professional Footer -->
<footer class="footer-section">
    <style>
        .footer-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 50%, #dee2e6 100%);
            color: #495057;
            padding: 0;
            margin-top: 60px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            border-top: 3px solid transparent;
            border-image: linear-gradient(90deg, #4facfe, #00f2fe) 1;
        }

        .footer-main {
            padding: 50px 0 30px;
        }

        .footer-brand h5 {
            color: #212529;
            font-weight: 700;
            font-size: 1.4rem;
            margin-bottom: 15px;
            letter-spacing: 0.5px;
        }

        .footer-brand p {
            color: #6c757d;
            font-size: 0.9rem;
            line-height: 1.7;
            max-width: 300px;
        }

        .footer-heading {
            color: #212529;
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-heading::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 3px;
            background: linear-gradient(90deg, #4facfe, #00f2fe);
            border-radius: 2px;
        }

        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #6c757d;
            text-decoration: none;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .footer-links a::before {
            content: '›';
            font-size: 1.2rem;
            color: #4facfe;
            transition: transform 0.3s ease;
        }

        .footer-links a:hover {
            color: #0d6efd;
            transform: translateX(5px);
        }

        .footer-links a:hover::before {
            transform: translateX(3px);
        }

        .footer-contact-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin-bottom: 15px;
            color: #6c757d;
            font-size: 0.9rem;
        }

        .footer-contact-icon {
            width: 36px;
            height: 36px;
            min-width: 36px;
            background: rgba(79, 172, 254, 0.1);
            border: 1px solid rgba(79, 172, 254, 0.15);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #4facfe;
            transition: all 0.3s ease;
        }

        .footer-contact-item:hover .footer-contact-icon {
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            color: #fff;
            border-color: transparent;
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(79, 172, 254, 0.25);
        }

        .footer-contact-icon svg {
            width: 16px;
            height: 16px;
        }

        .footer-social {
            display: flex;
            gap: 12px;
            margin-top: 20px;
        }

        .footer-social a {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: #ffffff;
            border: 1px solid #dee2e6;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6c757d;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 2px 6px rgba(0,0,0,0.04);
        }

        .footer-social a:hover {
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            color: #fff;
            border-color: transparent;
            transform: translateY(-3px);
            box-shadow: 0 6px 18px rgba(79, 172, 254, 0.3);
        }

        .footer-social a svg {
            width: 18px;
            height: 18px;
        }

        .footer-divider {
            border: none;
            border-top: 1px solid #ced4da;
            margin: 0;
        }

        .footer-bottom {
            padding: 20px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
        }

        .footer-bottom p {
            margin: 0;
            color: #adb5bd;
            font-size: 0.85rem;
        }

        .footer-bottom-links {
            display: flex;
            gap: 20px;
        }

        .footer-bottom-links a {
            color: #adb5bd;
            text-decoration: none;
            font-size: 0.85rem;
            transition: color 0.3s ease;
        }

        .footer-bottom-links a:hover {
            color: #0d6efd;
        }

        @media (max-width: 768px) {
            .footer-bottom {
                justify-content: center;
                text-align: center;
            }
            .footer-main {
                padding: 35px 0 20px;
            }
        }
    </style>

    <div class="footer-main">
        <div class="container">
            <div class="row g-4">
                <!-- Brand Column -->
                <div class="col-lg-4 col-md-6">
                    <div class="footer-brand">
                        <h5>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#4facfe" class="me-2" viewBox="0 0 16 16" style="vertical-align: -3px;">
                                <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484q-.121.12-.242.234c-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z"/>
                            </svg>
                            User Management
                        </h5>
                        <p>A secure and modern user management system built with PHP. Manage your users efficiently with our intuitive dashboard.</p>
                    </div>
                    <!-- Social Icons -->
                    <div class="footer-social">
                        <a href="#" title="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0 0 3.603 0 8.05 0 12.067 2.928 15.396 6.75 16v-5.624H4.718V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.822-.604 6.75-3.934 6.75-7.951"/>
                            </svg>
                        </a>
                        <a href="#" title="Twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                            </svg>
                        </a>
                        <a href="#" title="GitHub">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                            </svg>
                        </a>
                        <a href="#" title="LinkedIn">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links Column -->
                <div class="col-lg-2 col-md-6">
                    <h6 class="footer-heading">Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="index.php">Dashboard</a></li>
                        <li><a href="ajouter_user.php">Add User</a></li>
                        <li><a href="index.php">User List</a></li>
                    </ul>
                </div>

                <!-- Resources Column -->
                <div class="col-lg-2 col-md-6">
                    <h6 class="footer-heading">Resources</h6>
                    <ul class="footer-links">
                        <li><a href="#">Documentation</a></li>
                        <li><a href="#">API Reference</a></li>
                        <li><a href="#">Support</a></li>
                    </ul>
                </div>

                <!-- Contact Column -->
                <div class="col-lg-4 col-md-6">
                    <h6 class="footer-heading">Contact Us</h6>
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
                            </svg>
                        </div>
                        <div>
                            <strong style="color: #212529;">Email</strong><br>
                            contact@usermanagement.com
                        </div>
                    </div>
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                            </svg>
                        </div>
                        <div>
                            <strong style="color: #212529;">Phone</strong><br>
                            +212 6 00 00 00 00
                        </div>
                    </div>
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                            </svg>
                        </div>
                        <div>
                            <strong style="color: #212529;">Location</strong><br>
                            Morocco
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <hr class="footer-divider">
    <div class="container">
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> User Management System. All rights reserved.</p>
            <div class="footer-bottom-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Cookie Policy</a>
            </div>
        </div>
    </div>
</footer>
