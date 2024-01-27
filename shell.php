<?php
// 检查是否是 AJAX 请求
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    // 这里执行 AJAX 请求的处理
    $scriptPath = '/home/ubuntu/pullOnTime.sh';
    exec($scriptPath, $output, $returnVar);

    if ($returnVar == 0) {
        echo json_encode(["success" => true, "output" => $output]);
    } else {
        echo json_encode(["success" => false, "output" => $output]);
    }
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gbc更新</title>
    <style>
        .VAPTCHA-init-main {
            display: table;
            width: 100%;
            height: 100%;
            background-color: #eeeeee;
        }

        .VAPTCHA-init-loading {
            display: table-cell;
            vertical-align: middle;
            text-align: center;
        }

        .VAPTCHA-init-loading>a {
            display: inline-block;
            width: 18px;
            height: 18px;
            border: none;
        }

        .VAPTCHA-init-loading .VAPTCHA-text {
            font-family: sans-serif;
            font-size: 12px;
            color: #cccccc;
            vertical-align: middle;
        }
    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script src="https://v-cn.vaptcha.com/v3.js"></script>
</head>
<body>

<div id="VAPTCHAContainer" style="width: 300px;height: 36px;">
        <!-- 下面代码为预加载动画代码，仅供参考 -->
        <div class="VAPTCHA-init-main">
            <div class="VAPTCHA-init-loading">
                <a href="/" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="48px"
                        height="60px" viewBox="0 0 24 30"
                        style="enable-background: new 0 0 50 50; width: 14px; height: 14px; vertical-align: middle"
                        xml:space="preserve">
                        <rect x="0" y="9.22656" width="4" height="12.5469" fill="#CCCCCC">
                            <animate attributeName="height" attributeType="XML" values="5;21;5" begin="0s" dur="0.6s"
                                repeatCount="indefinite"></animate>
                            <animate attributeName="y" attributeType="XML" values="13; 5; 13" begin="0s" dur="0.6s"
                                repeatCount="indefinite"></animate>
                        </rect>
                        <rect x="10" y="5.22656" width="4" height="20.5469" fill="#CCCCCC">
                            <animate attributeName="height" attributeType="XML" values="5;21;5" begin="0.15s" dur="0.6s"
                                repeatCount="indefinite"></animate>
                            <animate attributeName="y" attributeType="XML" values="13; 5; 13" begin="0.15s" dur="0.6s"
                                repeatCount="indefinite"></animate>
                        </rect>
                        <rect x="20" y="8.77344" width="4" height="13.4531" fill="#CCCCCC">
                            <animate attributeName="height" attributeType="XML" values="5;21;5" begin="0.3s" dur="0.6s"
                                repeatCount="indefinite"></animate>
                            <animate attributeName="y" attributeType="XML" values="13; 5; 13" begin="0.3s" dur="0.6s"
                                repeatCount="indefinite"></animate>
                        </rect>
                    </svg>
                </a>
                <span class="VAPTCHA-text">Vaptcha Initializing...</span>
            </div>
        </div>
    </div>

    <script>
        vaptcha({
            vid: '65b4c34dd3784602950e7438', // 替换为您的验证单元VID
            mode: 'click',
            scene: 0,
            container: '#VAPTCHAContainer',
            area: 'auto',
        }).then(function (VAPTCHAObj) {
            // 渲染验证组件
            VAPTCHAObj.render();

            // 监听验证成功事件
            VAPTCHAObj.listen('pass', function () {
                // 用户通过验证后启用按钮
                document.getElementById('triggerButton').disabled = false;
            });
        });

        // 为按钮添加点击事件
        document.getElementById('triggerButton').addEventListener('click', function() {
            // 通过 AJAX 请求执行 PHP 脚本
            $.ajax({
                url: '', // 当前页面
                type: 'POST',
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        console.log('脚本执行成功:', response.output);
                    } else {
                        console.error('脚本执行失败:', response.output);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('请求失败:', error);
                }
            });
        });
    </script>
    






</body>
</html>
