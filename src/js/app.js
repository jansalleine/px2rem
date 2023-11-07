"use strict";

(function (d, w)
{
    var baseInput   = d.getElementById("base"),
        pxInput     = d.getElementById("value"),
        remOutput   = d.getElementById("result");

    function calcRem(e)
    {
        var base    = parseInt(baseInput.value),
            px      = parseInt(pxInput.value),
            rem     = 1;

        rem = px / base;
        remOutput.value = rem;
    }

    baseInput.addEventListener("change", calcRem);
    pxInput.addEventListener("change", calcRem);
}
)(document, window);
