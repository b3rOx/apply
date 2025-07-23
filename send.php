<?php
// Your existing email sending PHP code here

// After successful send (or regardless), output this HTML:
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>TeWoo Application Status</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    /* Reset some defaults */
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #f3e6d4, #b68f44);
      color: #3e2f1c;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
      text-align: center;
      flex-direction: column;
    }

    .container {
      background: #fff8ef;
      padding: 40px 50px;
      border-radius: 16px;
      box-shadow: 0 12px 30px rgba(182, 143, 68, 0.35);
      max-width: 440px;
      width: 100%;
      transition: transform 0.3s ease;
    }

    .container:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 45px rgba(182, 143, 68, 0.5);
    }

    h1 {
      font-weight: 700;
      font-size: 2.6rem;
      margin-bottom: 12px;
      color: #5c4724;
      text-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }

    p {
      font-weight: 500;
      font-size: 1.15rem;
      margin-bottom: 30px;
      color: #6e5a32;
      line-height: 1.5;
    }

    .join-text {
      font-size: 1.1rem;
      font-style: italic;
      margin-bottom: 40px;
      color: #7a6239;
      font-weight: 600;
    }

    .join-text span {
      font-weight: 800;
      color: #9a7e3f;
      letter-spacing: 1.1px;
    }

    .btn-instagram {
      display: inline-flex;
      align-items: center;
      gap: 14px;
      background-color: #8a623d;
      color: #fff;
      padding: 14px 36px;
      font-weight: 700;
      font-size: 1.25rem;
      border-radius: 50px;
      box-shadow: 0 8px 18px rgba(138, 98, 61, 0.5);
      text-decoration: none;
      transition: background-color 0.3s ease, box-shadow 0.3s ease, transform 0.25s ease;
      user-select: none;
    }

    .btn-instagram:hover {
      background-color: #b8863e;
      box-shadow: 0 12px 30px rgba(184, 134, 62, 0.7);
      transform: scale(1.07);
    }

    .btn-instagram svg {
      width: 28px;
      height: 28px;
      fill: currentColor;
      filter: drop-shadow(0 1px 1px rgba(0,0,0,0.12));
      transition: transform 0.3s ease;
    }

    .btn-instagram:hover svg {
      transform: rotate(15deg) scale(1.15);
    }

    .footer {
      margin-top: 25px;
      font-size: 0.9rem;
      color: #5c4724;
      font-weight: 600;
      opacity: 0.6;
      user-select: none;
    }

    @media (max-width: 480px) {
      .container {
        padding: 30px 20px;
      }
      h1 {
        font-size: 2rem;
      }
      p {
        font-size: 1rem;
      }
      .join-text {
        font-size: 1rem;
        margin-bottom: 30px;
      }
      .btn-instagram {
        padding: 12px 28px;
        font-size: 1.1rem;
        gap: 10px;
      }
      .btn-instagram svg {
        width: 24px;
        height: 24px;
      }
      .footer {
        font-size: 0.8rem;
        margin-top: 18px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Thank you for your application!</h1>
    <p>We appreciate your interest in joining TeWoo Specialty Coffee. We will contact you shortly.</p>

    <div class="join-text">
      Click to follow us on Instagram, <span>Tewoo.mk</span>
    </div>

    <a href="https://www.instagram.com/tewoo.mk" target="_blank" rel="noopener noreferrer" class="btn-instagram" aria-label="Instagram">
      <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg">
        <path d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7zm10 2a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm-5 2.5a4.5 4.5 0 1 1 0 9 4.5 4.5 0 0 1 0-9zm0 2a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5z"/>
      </svg>
      Instagram
    </a>
  </div>

  <div class="footer">
    Designed by: Berox
  </div>
</body>
</html>
