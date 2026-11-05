<!DOCTYPE html>
<html>
  <head>
    <title>Welcome to Endor!</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }

      main {
        margin: 3rem auto 0;
        padding: 1rem;
        max-width: 650px;
        width: 100%;
      }

      pre {
        margin: 0 auto;
        width: 425px;
      }

      h1 {
        margin-top: 3rem;
      }

      h2 {
        margin-top: 2rem;
      }
    </style>
  </head>
  <body>
    <main>
      <pre> ______     __   __     _____     ______     ______
/\  ___\   /\ "-.\ \   /\  __-.  /\  __ \   /\  == \
\ \  __\   \ \ \-.  \  \ \ \/\ \ \ \ \/\ \  \ \  __<
 \ \_____\  \ \_\\"\_\  \ \____-  \ \_____\  \ \_\ \_\
  \/_____/   \/_/ \/_/   \/____/   \/_____/   \/_/ /_/</pre>
      <h1>
        Welcome to Endor
      </h1>
      <p>
        This is a PHP page served by a LAMP stack <a href="https://docs.endor.dev/faq/general/" target="_blank">running 100% inside your browser</a>. You can edit it by navigating to '/var/www/localhost/htdocs/' in the Terminal application in the sidebar and editing the 'index.php' file.
      </p>

      <h2>Run the Examples</h2>
      <p>You can try some of the already installed scripts and applications:</p>
      <ul>
        <li><a href="/info.php">phpinfo();</a></li>
        <li><a href="/phpmyadmin/">phpMyAdmin</a></li>
      </ul>
  
      <h2>Run your Own Project</h2>
      <p>You can run your own and third-party PHP applications, such as WordPress by connecting <a href="https://docs.endor.dev/guides/hello/" target="_blank">Endor to specific folders on your computer</a>.</p>

      <h2>LAMP Sandbox</h2>
      <p>This image contains a fully featured LAMP stack. Learn how to manage it, including default ports and passwords in the <a href="https://docs.endor.dev/reference/installed/" target="_blank">reference documentation</a>. The following versions are included:</p>
      <ul>
        <li>Alpine Linux x86 3.20</li>
        <li>Apache 2.4</li>
        <li>MariaDB 10.11</li>
        <li><?php echo 'PHP ' . phpversion(); ?></li>
        <li>PHPMyAdmin 5.2.1</li>
      </ul>
    </main>
  </body>
</html>
