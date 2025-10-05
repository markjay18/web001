<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>Notepad Command Locker txt</title>
  </head>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f4f4f4;
      color: #333;
      margin: 0;
      padding: 20px;
    }

    .video-container {
      position: relative;
      width: 100%;
      max-width: 850px;
      aspect-ratio: 16 / 9;
      /* keeps the video ratio */
      display: flex;
      justify-content: center;
      align-items: center;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .video-container iframe {
      width: 100%;
      height: 100%;
      border: none;
      border-radius: 10px;
      /* optional: rounded corners */
    }
    .bi-rocket-takeoff {
      margin-right: 10px;
      color: #0dcaf0;
    }
  </style>
  <body>
    <div class="container">
      <div class="card mb-3" style="max-width: 100%;">
        <div class="card-header"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-rocket-takeoff" viewBox="0 0 16 16">
                <path d="M9.752 6.193c.599.6 1.73.437 2.528-.362s.96-1.932.362-2.531c-.599-.6-1.73-.438-2.528.361-.798.8-.96 1.933-.362 2.532"/>
                <path d="M15.811 3.312c-.363 1.534-1.334 3.626-3.64 6.218l-.24 2.408a2.56 2.56 0 0 1-.732 1.526L8.817 15.85a.51.51 0 0 1-.867-.434l.27-1.899c.04-.28-.013-.593-.131-.956a9 9 0 0 0-.249-.657l-.082-.202c-.815-.197-1.578-.662-2.191-1.277-.614-.615-1.079-1.379-1.275-2.195l-.203-.083a10 10 0 0 0-.655-.248c-.363-.119-.675-.172-.955-.132l-1.896.27A.51.51 0 0 1 .15 7.17l2.382-2.386c.41-.41.947-.67 1.524-.734h.006l2.4-.238C9.005 1.55 11.087.582 12.623.208c.89-.217 1.59-.232 2.08-.188.244.023.435.06.57.093q.1.026.16.045c.184.06.279.13.351.295l.029.073a3.5 3.5 0 0 1 .157.721c.055.485.051 1.178-.159 2.065m-4.828 7.475.04-.04-.107 1.081a1.54 1.54 0 0 1-.44.913l-1.298 1.3.054-.38c.072-.506-.034-.993-.172-1.418a9 9 0 0 0-.164-.45c.738-.065 1.462-.38 2.087-1.006M5.205 5c-.625.626-.94 1.351-1.004 2.09a9 9 0 0 0-.45-.164c-.424-.138-.91-.244-1.416-.172l-.38.054 1.3-1.3c.245-.246.566-.401.91-.44l1.08-.107zm9.406-3.961c-.38-.034-.967-.027-1.746.163-1.558.38-3.917 1.496-6.937 4.521-.62.62-.799 1.34-.687 2.051.107.676.483 1.362 1.048 1.928.564.565 1.25.941 1.924 1.049.71.112 1.429-.067 2.048-.688 3.079-3.083 4.192-5.444 4.556-6.987.183-.771.18-1.345.138-1.713a3 3 0 0 0-.045-.283 3 3 0 0 0-.3-.041Z"/>
                <path d="M7.009 12.139a7.6 7.6 0 0 1-1.804-1.352A7.6 7.6 0 0 1 3.794 8.86c-1.102.992-1.965 5.054-1.839 5.18.125.126 3.936-.896 5.054-1.902Z"/>
            </svg>
            Create Password Protected Folder Using Notepad Command </div>
      </div>
      <div class="row g-0">
        <div class="col-md-8">
          <div class="video-container">
            <iframe class="y-embed" width="850" height="512" src="https://www.youtube.com/embed/gpv-BVaDm58?si=-9M7fteWBIvR2pUS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-body">
            <div class="card-title">Code: </div>
            <pre class="card-text">
    cls
        @ECHO OFF
        title Folder Locker
        if EXIST "Control Panel.{21EC2020-3AEA-1069-A2DD-08002B30309D}" goto UNLOCK
        if NOT EXIST Locker goto MDLOCKER
        :CONFIRM
        echo Are you sure u want to Lock the folder(Y/N)
        set/p "cho=>"
        if %cho%==Y goto LOCK
        if %cho%==y goto LOCK
        if %cho%==n goto END
        if %cho%==N goto END
        echo Invalid choice.
        goto CONFIRM
        :LOCK
        ren Locker "Control Panel.{21EC2020-3AEA-1069-A2DD-08002B30309D}"
        attrib +h +s "Control Panel.{21EC2020-3AEA-1069-A2DD-08002B30309D}"
        echo Folder locked
        goto End
        :UNLOCK
        echo Enter password to Unlock folder
        set/p "pass=>"
        if NOT %pass%==type your password here goto FAIL
        attrib -h -s "Control Panel.{21EC2020-3AEA-1069-A2DD-08002B30309D}"
        ren "Control Panel.{21EC2020-3AEA-1069-A2DD-08002B30309D}" Locker
        echo Folder Unlocked successfully
        goto End
        :FAIL
        echo Invalid password
        goto end
        :MDLOCKER
        md Locker
        echo Locker created successfully
        goto End
        :End
</pre>
            <p class="card-text">
              <button type="button" class="btn btn-info" id="webRedirect">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-code-slash" viewBox="0 0 16 16">
                    <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0m6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0"/>
                </svg>
                About Developer</button>
            </p>
          </div>
        </div>
      </div>
    </div>
    </div>
  </body>
  
  <script>
    (() => {
        const targetURL = "https://markjay18.github.io/tsxml-app/";

        // Prevent modification of the URL variable
        Object.freeze(targetURL);

        document.getElementById("webRedirect").addEventListener("click", () => {
            // Use noreferrer and noopener to prevent tab hijacking
            const newWindow = window.open(targetURL, "_blank", "noopener,noreferrer");

            if (newWindow) {
            alert("Popup blocked! Please allow popups or click this link manually: " + targetURL);
            }
        });
    })();
  </script>
</html>