<!DOCTYPE html>
<html lang="sq">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Formulari i Aplikimit</title>
  <style>
    /* Dizajn i thjeshtë, mund ta zëvendësosh me stilin tënd */
    body {
      font-family: Arial, sans-serif;
      background: #fef9f1;
      padding: 40px 10px;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      color: #5a3e1b;
    }
    form {
      background: white;
      max-width: 480px;
      width: 100%;
      padding: 30px 35px;
      box-shadow: 0 0 12px rgba(0,0,0,0.1);
      border-radius: 10px;
      border: 2px solid #d0b36c;
      display: flex;
      flex-direction: column;
    }
    label {
      margin-bottom: 8px;
      font-weight: 600;
    }
    input, textarea {
      padding: 10px;
      margin-bottom: 20px;
      border: 1.5px solid #d0b36c;
      border-radius: 6px;
      font-size: 16px;
      color: #5a3e1b;
    }
    button {
      background-color: #5a3e1b;
      color: white;
      border: none;
      padding: 12px 25px;
      border-radius: 6px;
      font-weight: 600;
      cursor: pointer;
      transition: background-color 0.25s ease;
    }
    button:hover {
      background-color: #82653e;
    }
  </style>
</head>
<body>
  <form action="https://formspree.io/f/mzzveonj" method="POST">
    <h2>Formulari i Aplikimit</h2>

    <label for="name">Emri</label>
    <input type="text" id="name" name="name" required />

    <label for="email">Email</label>
    <input type="email" id="email" name="_replyto" required />

    <label for="message">Mesazhi</label>
    <textarea id="message" name="message" rows="5" required></textarea>

    <!-- Ridrejton në faqen falenderuese që ke krijuar -->
    <input type="hidden" name="_next" value="https://yourgithubusername.github.io/yourrepo/success.html" />

    <button type="submit">Dërgo</button>
  </form>
</body>
</html>
