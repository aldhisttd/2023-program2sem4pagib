<?php
$string =  '<!DOCTYPE html>' .
    '<html>' .
    '' .
    '<head>' .
    '    <title>Login</title>' .
    '    <style>' .
    '        #card {' .
    '            background: #fbfbfb;' .
    '            border-radius: 8px;' .
    '            box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);' .
    '            height: 410px;' .
    '            margin: 6rem auto 8.1rem auto;' .
    '            width: 329px;' .
    '        }' .
    '' .
    '        #card-content {' .
    '            padding: 12px 44px;' .
    '        }' .
    '' .
    '        #card-title {' .
    '            font-family: "Raleway Thin", sans-serif;' .
    '            letter-spacing: 4px;' .
    '            padding-bottom: 23px;' .
    '            padding-top: 13px;' .
    '            text-align: center;' .
    '        }' .
    '' .
    '        .underline-title {' .
    '            background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);' .
    '            height: 2px;' .
    '            margin: -1.1rem auto 0 auto;' .
    '            width: 89px;' .
    '        }' .
    '' .
    '        a {' .
    '            text-decoration: none;' .
    '        }' .
    '' .
    '        label {' .
    '            font-family: "Raleway", sans-serif;' .
    '            font-size: 11pt;' .
    '        }' .
    '' .
    '        .form {' .
    '            align-items: left;' .
    '            display: flex;' .
    '            flex-direction: column;' .
    '        }' .
    '' .
    '        .form-border {' .
    '            background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);' .
    '            height: 1px;' .
    '            width: 100%;' .
    '        }' .
    '' .
    '        .form-content {' .
    '            background: #fbfbfb;' .
    '            border: none;' .
    '            outline: none;' .
    '            padding-top: 14px;' .
    '        }' .
    '' .
    '        #signup {' .
    '            color: #2dbd6e;' .
    '            font-family: "Raleway", sans-serif;' .
    '            font-size: 10pt;' .
    '            margin-top: 16px;' .
    '            text-align: center;' .
    '        }' .
    '' .
    '        #submit-btn {' .
    '            background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);' .
    '            border: none;' .
    '            border-radius: 21px;' .
    '            box-shadow: 0px 1px 8px #24c64f;' .
    '            cursor: pointer;' .
    '            color: white;' .
    '            font-family: "Raleway SemiBold", sans-serif;' .
    '            height: 42.3px;' .
    '            margin: 0 auto;' .
    '            margin-top: 50px;' .
    '            transition: 0.25s;' .
    '            width: 153px;' .
    '        }' .
    '' .
    '        #submit-btn:hover {' .
    '            box-shadow: 0px 1px 18px #24c64f;' .
    '        }' .
    '    </style>' .
    '</head>' .
    '' .
    '<body>' .
    '    <div id="card">' .
    '        <div id="card-content">' .
    '            <div id="card-title">' .
    '                <h2>Form Mahasiswa</h2>' .
    '                <div class="underline-title"></div>' .
    '            </div>' .
    '            <form method="post" class="form">' .
    '                <label for="text-align" style="padding-top:13px">' .
    '                    &nbsp;Nama Mahasiswa' .
    '                </label>' .
    '                <input id="text-align" class="form-content" type="nama" name="nama" autocomplete="on" required />' .
    '                <div class="form-border"></div>' .
    '            </form>' .
    '            <form name="form2" action="proses.php" method="get">' .
    '                <label for="text-align" style="padding-top:13px">' .
    '                    &nbsp;Jenis Kelamin' .
    '                </label>' .
    '            </form>' .
    '            <select name="jenis_kelamin">' .
    '                <option>default</option>' .
    '                <option>LAKI LAKI</option>' .
    '                <option>PEREMPUAN</option>' .
    '            </select>' .
    '            <input id="submit-btn" type="submit" name="submit" value="LOGIN" />' .
    '            </form>' .
    '' .
    '        </div>' .
    '' .
    '    </div>' .
    '</body>' .
    '' .
    '</html>';

echo $string;
