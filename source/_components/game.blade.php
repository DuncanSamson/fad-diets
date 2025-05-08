<div class="flex justify-center pt-8">
<canvas id="unity-canvas" width=512 height=288 tabindex="-1" style="width: 512px; height: 288px; background: #231F20"></canvas>
<script src="/assets/game/Build/game.loader.js"></script>
<script>
    if (/iPhone|iPad|iPod|Android/i.test(navigator.userAgent)) {
        // Mobile device style: fill the whole browser client area with the game canvas:
        var meta = document.createElement('meta');
        meta.name = 'viewport';
        meta.content = 'width=device-width, height=device-height, initial-scale=1.0, user-scalable=no, shrink-to-fit=yes';
        document.getElementsByTagName('head')[0].appendChild(meta);

        var canvas = document.querySelector("#unity-canvas");
        canvas.style.width = "100%";
        canvas.style.height = "100%";
        canvas.style.position = "fixed";
        document.body.style.textAlign = "left";
    }

    createUnityInstance(document.querySelector("#unity-canvas"), {
        arguments: [],
        dataUrl: "/assets/game/Build/game.data",
        frameworkUrl: "/assets/game/Build/game.framework.js",
        codeUrl: "/assets/game/Build/game.wasm",
        streamingAssetsUrl: "/assets/game/StreamingAssets",
        companyName: "FAD diet game",
        productName: "FAD diet game",
        productVersion: "1.0",
        // matchWebGLToCanvasSize: false, // Uncomment this to separately control WebGL canvas render size and DOM element size.
        // devicePixelRatio: 1, // Uncomment this to override low DPI rendering on high DPI displays.
    });
</script>
</div>