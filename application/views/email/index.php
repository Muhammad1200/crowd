
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email Template</title>
</head>
<body style="font-family: 'Yu Gothic UI'">
<table style="
       width: 800px;
        margin: 0 auto;
        text-align: center;
    ">
    <thead>
    <tr>
        <th colspan="2"><img src="<?= base_url('theme/email/logo.png') ?>" style="margin-bottom: 30px" width="200"></th>
    </tr>
    <tr>
        <th colspan="2"><img src="<?= base_url('theme/email/'.$content[0]['image']) ?>" width="30%"></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <?php if($content[0]['type'] == 'Responded'){ ?>
        <td colspan="2" style="margin-top: 20px">
            <h1 style="font-weight: bolder;font-size: 50px;">We got a response!</h1>
        </td>
        <?php } ?>
        <?php if($content[0]['type'] == 'Responded'){ ?>
            <td colspan="2" style="margin-top: 20px">
                <h1 style="font-weight: bolder;font-size: 50px;">We got a response!</h1>
            </td>
        <?php } ?>
        <?php if($content[0]['type'] == 'Pre-Approved'){ ?>
            <td colspan="2" style="margin-top: 20px">
                <h1 style="font-weight: bolder;font-size: 50px;">Woohoo,Pre-Approved!</h1>
            </td>
        <?php } ?>

    </tr>

    <tr>
        <td colspan="2">
            <h3 style="
                    font-size: 20px;
                    color: #000000;
                    margin-top: 10px;
                    margin-bottom: 10px;
                    ">Status: <?= ($content[0]['type'] == 'Pre-Qualified-Client')?  str_replace('-Client','',$content[0]['type']) : str_replace('-Refer','',$content[0]['type'])  ?></h3>
            <?php if($content[0]['type'] == 'Pre-Qualified-Client' OR $content[0]['type'] == 'Pre-Qualified-Refer'){ ?>
            <h6 style="
                    font-size: 14px;
                    color: #000000;
                    margin-top: 0;
                    margin-bottom: 10px;
                    ">Pre-Qualified Amount: {Prequalifed Amount}</h6>
            <?php } ?>
            <?php if($content[0]['type'] == 'Pre-Approved'){ ?>
            <h6 style="
                    font-size: 14px;
                    color: #000000;
                    margin-top: 0;
                    margin-bottom: 10px;
                    ">Pre-Approved Amount: {pre-approved amount}</h6>
            <?php } ?>

            <p style="margin: 0; font-size: 15px;padding: 30px 0px;">
                <?= $content[0]['description'] ?>
            </p>

            <?php if($content[0]['button'] == 'true'){ ?>
            <a href="#" style="
                        padding: 15px 0;
                        color: #ffffff;
                        display: block;
                        width: 200px;
                        margin: 0 auto;
                        font-size: 16px;
                        background-color: #53347f;
                        text-decoration:none;
                        border-radius:10px ;
                    "> <?= $content[0]['button_namae'] ?></a>
            <?php } ?>
        </td>
    </tr>
    <tr style="margin-top: 10px; margin-bottom: 10px;">
        <td style="">
            <img src="https://devlabx.com/blake-email/blake.jpg">
            <a href="#" style="
                        padding: 10px;
                        color: #ffffff;
                        text-transform: uppercase;
                        display: block;
                        width: 200px;
                        margin: 10px auto;
                        font-size: 16px;
                        background-color: #976fce;
                        text-decoration:none;
                        border-radius:20px ;
                    "> Apply Now</a>
        </td>
        <td style="">
            <h3 style="color: #53347f; width: 100%; margin-bottom: 0; margin-top: 5px; margin-left: 30px; font-size: 19px; text-align: left">Blake Bianchi
                <span style="display: block; font-size: 18px; color: #999999;">NMLS license #1243537</span>
                <span style="color:#000000;">Branch Manager</span>
            </h3>
            <h2 style="float:left; margin-bottom:0px;  width: 100%; text-align: left; margin-top: 30px; margin-left: 30px">
                <img src="https://devlabx.com/blake-email/call.png" width="30" style="display: block; float:left; margin-right: 10px">
                <span style="font-size: 15px; width: 80%; display: block; float: left;">(208) 985-7632 office <br> (208) 985-8268 cell</span>
            </h2>
            <h2 style="float:left; margin-bottom:0px;  width: 50%; text-align: left; margin-top: 10px; margin-left: 30px">
                <img src="https://devlabx.com/blake-email/link.png" width="30" style="display: block; float:left; margin-right: 10px">
                <span style="font-size: 15px; width: 80%; display: block; float: left;">
                            <a href="#" style="display: block">bbianchi@loandepot.com</a>
                            <a href="#" style="display: block">http://www.loandepot.com/bbianchi</a>
                        </span>
            </h2>
            <h2 style="float:left; margin-bottom:0px;  width: 100%; text-align: left; margin-top: 10px; margin-left: 30px">
                <img src="https://devlabx.com/blake-email/location.png" width="30" style="display: block; float:left; margin-right: 10px">
                <span style="font-size: 15px; width: 80%; display: block; float: left;">3573 Longwing Ln Ste 210 <br> Meridian, Idaho 83646</span>
            </h2>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="margin-top: 20px;">
            <img src="https://devlabx.com/blake-email/loan-ad.PNG" style="display: block; margin: 50px auto 0" width="700">
        </td>
    </tr>
    <tr >
        <td colspan="2" style="margin-top: 20px; text-align: left">
            <p style="font-size: 12px; margin-top: 50px">
                State Licensing : CA LIC# CA-DBO1243537 | ID LIC# MLO-2081243537 | TX
            </p>
            <p style="font-size: 12px">
                Customer service is our top priority: If you are not receiving exceptional customer service, or
                if you have any questions, please feel free to contact my manager Craig Stammler at (208)
                985-1552 or at <a href="#">cstammler@loandepot.com</a>
            </p>
            <p style="font-size: 12px">
                Confidentiality Note: This email and any attachment(s) are for the sole use of the intended
                recipient(s) and may be confidential and/or privileged. Any unauthorized use, disclosure or
                copying is strictly prohibited and may be unlawful. If you have received this communication in
                error, please immediately notify the sender by return email, and delete the message.
                Please consider the environment before printing this email.
            </p>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>