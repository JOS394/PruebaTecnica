<style>
    .footer {
        background: linear-gradient(135deg, #232526 0%, #414345 100%);
        color: #fff;
        position: relative;
        overflow: hidden;
        padding: 0;
    }
    .footer .social-link:hover {
        transform: scale(1.15) rotate(-6deg);
        box-shadow: 0 4px 16px #00d4ff55;
        text-decoration: none;
    }
    @media (max-width: 900px) {
        .footer-content {
            flex-direction: column !important;
            gap: 30px !important;
            align-items: flex-start !important;
        }
        .footer-section {
            min-width: 0 !important;
        }
    }
    .footer-content {
        display: flex;
        flex-wrap: wrap;
        gap: 40px;
        justify-content: space-between;
        align-items: flex-start;
        padding: 50px 0 30px;
    }
    .footer-section {
        flex: 1 1 200px;
        min-width: 180px;
    }
    .footer-section:first-child {
        flex: 2 1 300px;
        min-width: 250px;
    }
    .footer-logo {
        margin-bottom: 20px;
    }
    .footer-logo .logo-img {
        height: 60px;
        filter: brightness(0) invert(1) drop-shadow(0 0 10px #007bff88);
        transition: transform 0.3s;
    }
    .company-description {
        color: #b0b0b0;
        line-height: 1.7;
        font-size: 1.05rem;
    }
    .footer-title {
        color: #fff;
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 20px;
        position: relative;
        padding-bottom: 10px;
    }
    .footer-title span {
        border-bottom: 2px solid #00d4ff;
        padding-bottom: 2px;
    }
    .contact-info {
        color: #b0b0b0;
    }
    .contact-info p {
        margin-bottom: 8px;
    }
    .contact-info p:last-child {
        margin-bottom: 0;
    }
    .contact-info i {
        color: #00d4ff;
        margin-right: 8px;
    }
    .contact-info a {
        color: #b0b0b0;
        text-decoration: underline;
    }
    .social-icons {
        display: flex;
        gap: 16px;
    }
    .social-link {
        border-radius: 50%;
        width: 38px;
        height: 38px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.3em;
        transition: transform 0.2s;
    }
    .social-link.facebook { background: #3b5998; color: #fff; box-shadow: 0 2px 8px #3b599855; }
    .social-link.instagram { background: linear-gradient(135deg, #f58529 0%, #dd2a7b 50%, #515bd4 100%); color: #fff; box-shadow: 0 2px 8px #dd2a7b55; }
    .social-link.linkedin { background: #0077b5; color: #fff; box-shadow: 0 2px 8px #0077b555; }
    .social-link.twitter { background: #1da1f2; color: #fff; box-shadow: 0 2px 8px #1da1f255; }
    .footer-bottom {
        border-top: 1px solid #333a;
        padding: 18px 0 8px;
        text-align: center;
        margin-top: 10px;
    }
    .footer-divider {
        height: 2px;
        width: 80px;
        background: linear-gradient(90deg, #007bff, #00d4ff);
        margin: 0 auto 12px;
        border-radius: 2px;
    }
    .copyright {
        color: #b0b0b0;
        font-size: 0.98em;
    }
    .copyright p {
        margin: 0;
    }
</style>