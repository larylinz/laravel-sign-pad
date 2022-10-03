<?php

namespace Creagia\LaravelSignPad\Tests\TestClasses;

class TestSignature
{
    public function build()
    {
        return 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAfQAAAGQCAYAAABYs5LGAAAAAXNSR0IArs4c6QAAHvtJREFUeF7t3Y2RJDdyBlCcB2eC5IE8oNYEWXA0gWcBRQtIE3gWyASRHsgDyQPRAyqwnKJ6e2e6q7qAQiLxJmLjFNrqAvIldj7Wb/+l+CFAgAABAgSmF/jL9BUogAABAgQIECgC3SIgQIAAAQIJBAR6giYqgQABAgQICHRrgAABAgQIJBAQ6AmaqAQCBAgQICDQrQECBAgQIJBAQKAnaKISCBAgQICAQLcGCBAgQIBAAgGBnqCJSiBAgAABAgLdGiBAgAABAgkEBHqCJiqBAAECBAgIdGuAAAECBAgkEBDoCZqoBAIECBAgINCtAQIECBAgkEBAoCdoohIIECBAgIBAtwYIECBAgEACAYGeoIlKIECAAAECAt0aIECAAAECCQQEeoImKoEAAQIECAh0a4AAAQIECCQQEOgJmqgEAgQIECAg0K0BAgQIECCQQECgJ2iiEggQIECAgEC3BggQIECAQAIBgZ6giUogQIAAAQIC3RogQIAAAQIJBAR6giYqgQABAgQICHRrgAABAgQIJBAQ6AmaqAQCBAgQICDQrQECBAgQIJBAQKAnaKISCBAgQICAQLcGCBAgQIBAAgGBnqCJSiBAgAABAgLdGiBAgAABAgkEBHqCJiqBAAECBAgIdGuAAAECBAgkEBDoCZqoBAIECBAgINCtAQIECBAgkEBAoCdoohIIECBAgIBAtwYIECBAgEACAYGeoIlKIECAAAECAt0aIECAAAECCQQEeoImKoEAAQIECAh0a4AAAQIECCQQEOgJmqgEAgQIECAg0K0BAgQIECCQQECgJ2iiEggQIECAgEC3BggQIECAQAIBgZ6giUogQIAAAQIC3RogQIAAAQIJBAR6giYGLOGXUso3pZR/lFK+DTg/UyJAgEA6AYGerqXDC/qulPLjzSysseEtMQECBFYQ8Mt2hS5fX+N/l1L+SahfD29EAgTWFRDo6/a+d+X/WUr517dBfiil/HvvAe2fAAECKwsI9JW737f2GuY11Lcfod7X294JEFhcQKAvvgA6l1+Pyr8X6p2V7Z4AAQKlFIFuGfQWuA/1T6WUehe8HwIECBBoKCDQG2La1YcCt6Few7yGuh8CBAgQaCgg0Bti2tVDgd+derdCCBAg0E9AoPeztecvBdwkZ0UQIECgo4BA74hr118JuEnOoiBAgEAnAYHeCdZuPxS4D3Vr0GIhQIBAAwG/TBsg2sVhgduXzrhJ7jCfDxAgQOBrAYFuVYwQcD19hLoxCRBILSDQU7c3dHGup4duj8kRIDCbgECfrWO55ivUc/VTNQQIDBQQ6APxDf1ZwJvkLAQCBAg0EBDoDRDt4rTA7U1ydWfW5WlSOyBAYDUBvzhX63jMet0kF7MvZkWAwEQCAn2iZiWfquvpyRusPAIE+goI9L6+9n5MQKgf87I1AQIE/hQQ6BZDNIH76+m+bjVah8yHAIGQAgI9ZFuWn9TtN7NVDOt0+SWxNEC9x6S+UdEPgYcCflFaIBEF7k+9ez1sxC6ZU2+BGuT1T/2p/yb8EBDo1sCUAq6nT9k2k24gIMgbIK64C0foK3Z9npqF+jy9MtM2AtuRuCPyNp5L7UWgL9XuKYu9v0nuB6cfp+yjST8W2AK8Xl5yvdxqeUlAoL/E5kMXCty/dKYObd1e2ABDdRW4PRJ3VN6VOv/O/WLM3+MMFd6fehfqGbq6dg3bmnbGae110LR6gd6U0846CrjzvSOuXV8mIMgvo15vIIG+Xs9nrvj+evo/SinfzlyQuS8jIMiXafW4QgX6OHsjvyZw/9IZpyxfc/SpawRqkH9TSvnVzZzXgK88ikBfuftz1v7e9XShPmcvs8/anevZOxysPoEerCGms0vg51LK3+62tJZ30dnoAgGn1y9ANsTXAn4JWhWzCrhJbtbO5Z23IM/b2ykqE+hTtMkkPxDw0hlLI4qAN7xF6cTC8xDoCzc/SelukkvSyEnLcFQ+aeMyTlugZ+zqWjW99yY5N8mttQZGVCvIR6gb86GAQLdAMgh4k1yGLs5Tg9Pr8/RqqZkK9KXanbpY38yWur0hinNUHqINJvGRgEC3NjIJCPVM3YxVi6PyWP0wm3cEBLplkU3g/s73T76OMluLL63HUfml3AY7IyDQz+j5bESB+5vk6ndL11D3Q+CogKPyo2K2Hyog0IfyG7yTwH2ou+u9E3TS3ToqT9rY7GUJ9OwdXrc+19PX7f2Zyh2Vn9Hz2aECAn0ov8E7C9yHuvXeGXzi3Tsqn7h5pv6HgF9wVkJ2gdtQr19hWU/H+yFwK+Co3HpIISDQU7RREU8E6o1x9Tup64/r6ZbLJuCo3FpIJSDQU7VTMQ8Ebo/Uhbql4qjcGkgnINDTtVRBDwRuv8jF8+lrLhVH5Wv2fYmqBfoSbVbkm8Dt42yeT19vWTgqX6/nS1Us0Jdqt2JLKU69r7cMHJWv1/MlKxboS7Z9+aKF+jpLwFH5Or1evlKBvvwSWBbg9p3vrqfnWwaOyvP1VEVPBAS6JbKqwP3rYf1byLMSHJXn6aVKDgj4JXYAy6bpBJx6z9VSR+W5+qmagwIC/SCYzdMJCPUcLa19/K2U8lOOclRB4LiAQD9u5hP5BFxPn7untX/1tb7bqfa5qzF7Ai8KCPQX4XwsncDtS2f8u5ijvU6xz9Ens7xIwC+ui6ANE17AqffwLfpigrVf9f389QkFPwQI+LY1a4DAVyHx/dv/x/ve4y4Op9jj9sbMBgo4Qh+Ib+iQAo7UQ7bl86ScYo/bGzMLICDQAzTBFMIJ+BKXcC35HOZOscfrixkFEhDogZphKmEEbo/SfYnL+LZ4Ucz4HpjBBAICfYImmeIQAafeh7B/MahT7ON7YAYTCQj0iZplqpcLCPXLyf8c0Cn2cfZGnlRAoE/aONO+TMD19MuoPw/kqPxab6MlEhDoiZqplC4CvsSlC+u7OxXm11kbKaGAQE/YVCU1F3DqvTnpVzvcjH2VbX9rIyQVEOhJG6us5gJCvTmpU+x9SO11VQGBvmrn1f2KwO2XuHiT3CuCX37GKfbzhvZA4E8BgW4xENgv4Hr6fqtnWzrF/kzI3xM4KCDQD4LZfHkBp97PLYHtP4qc4Tjn6NMEvhIQ6BYFgeMCQv24Wf2EU+yvufkUgV0CAn0Xk40IfCXgevqxRSHMj3nZmsBhAYF+mMwHCPwpcPvSGf+W3l8Y9RT77VfS1nfj+yFAoIOAX0IdUO1yGQGn3h+32lH5Mv8UFBpBQKBH6II5zCwg1N/vnjCfeVWb+5QCAn3Ktpl0MIHbUPemMze/BVueprOKgEBfpdPq7C3gevofwvVmwfpTH0tzvbz3qrN/AjcCAt1yINBG4PalM6s+Y72FeT1L4YcAgYsFBPrF4IZLLbDq9XQvi0m9rBU3i4BAn6VT5jmLwGrX0938NsvKNM/0AgI9fYsVOEDg9qUzmf+NCfMBi8uQBD4SyPzLRtcJjBJY4Xq6MB+1uoxL4AMBgW5pEOgjkPl6ujDvs2bslcApAYF+is+HCTwUuA31LP/WfO2pRU8gqECWXzJBeU2LwOfnsusp+PpM9uyPc3kszYImEFhAoAdujqmlEMhyPV2Yp1iOisgsINAzd1dtUQRmvp6+fVvar2/fZx7F1DwIELgTEOiWBIFrBGa8ni7Mr1kbRiHQRECgN2G0EwK7BLbr6TO8Gtbb33a11EYE4ggI9Di9MJM1BLYvcYkc6h5LW2MtqjKZgEBP1lDlhBeI/mpYYR5+CZkggfcFBLqVQeB6gS00oz3K9l0p5ce3rz6tc/RDgMBEAgJ9omaZaiqBaNfTt//I+Hsp5adU0oohsIiAQF+k0coMKRDlerrT7CGXh0kROCYg0I952ZpAS4Hbl86M+rcozFt21L4IDBQY9UtkYMmGJhBKYGSgjhw7VBNMhkAGAYGeoYtqmF1gRLCOGHP2Ppk/gdACAj10e0xuIYHtenr9Apd693vPH2HeU9e+CQwSEOiD4A1L4E5gu57e+1E2YW7pEUgqINCTNlZZUwr0DlvfZT7lsjBpAvsEBPo+J1sRuEqgV6gL86s6aBwCgwQE+iB4wxJ4ILC9dKbVv09hbrkRWECg1S+MBaiUSOBSgXqTXIsvcBHml7bNYATGCQj0cfZGJvBIoMWp93qkX3/qnfN+CBBILiDQkzdYeVMLvHp0Xe+Y/16YT917kydwWECgHybzAQKXCmyhvvff6vb4W4vT9ZcWajACBM4J7P0lcW4UnyZA4IzA3uvpLU7Tn5mnzxIgMFBAoA/ENzSBnQJ7gnrPNjuHsxkBAjMKCPQZu2bOKwo8OvUuzFdcEWomcCcg0C0JAvMI1OCuP9v/bv93vQHONfN5+mimBLoICPQurHZKoJtAfRTt17dQ315Ac8UXunQryI4JEGgjINDbONoLgasEtrvY/6uU8ptnzK9iNw6B+AICPX6PzJDArcAW6P9TSvlnNAQIENgEBLq1QGAegdub37ZZ315Pn6cSMyVAoLmAQG9OaocEugi8dyf7ezfJdRncTgkQiC8g0OP3yAwJPHos7edSyreICBAgINCtAQKxBZ49Y16vqdc/Tr3H7qPZEeguINC7ExuAwMsCz8J827FT7y8T+yCBPAICPU8vVZJLYG+Yb1XXZ9Lry2V+ycWgGgIE9goI9L1StiNwncDRML89Unfq/bo+GYlAKAGBHqodJkPg87Xw+irXV97+5tS7BURgYQGBvnDzlR5O4EyY3x6l19PuTr2Ha68JEegrIND7+to7gb0CLcJ8G6t+f7p/23vlbUcgiYB/9EkaqYypBVqGeYVw6n3q5WDyBF4TEOivufkUgVYCrcP89tT7bbi3mq/9ECAQVECgB22MaS0h0CvMnXpfYvkoksCXAgLdiiBwvUB9s1u9k73+7yt3s++dsbfI7ZWyHYEEAgI9QROVMJXAdlRe70KvYd77x/X03sL2TyCIgEAP0gjTWELg1RfGnMWp43qU7ayizxMILiDQgzfI9NIIjArzDdCjbGmWkkIIvC8g0K0MAv0FRod5rdCp9/59NgKBoQICfSi/wZML1JvS6pem1J/6xSmj37Mu1JMvOOWtLSDQ1+6/6vsJbEflUcLcqfd+vbZnAiEEBHqINphEMoHbMO/5WNorbB5le0XNZwhMICDQJ2iSKU4lcPVjaa/gOPX+iprPEAguINCDN8j0phKo18vrEfBVz5ifwfEo2xk9nyUQUECgB2yKKU0nEO3mt72A9T9Arni5zd752I4AgRMCAv0Eno8SeLtzvb7Gtf5EuJP9SFOcej+iZVsCwQUEevAGmV5ogah3sh9BE+pHtGxLILCAQA/cHFMLLZAhzDdgp95DLzWTI7BPQKDvc7IVgVuB7ea3GU+zv9fJ7dvfXE+3zglMLCDQJ26eqV8ucHtUXgeP9oz5GRCn3s/o+SyBAAICPUATTGEKgdswn+GxtFdQhforaj5DIIiAQA/SCNMILZDpevkzaN/K9kzI3xMIKiDQgzbGtMIIZLte/gzWUfozIX9PIKiAQA/aGNMaLnD7spg6mdmeMT8DKNTP6PksgUECAn0QvGFDC9zf/LZSmG+NqWcmat31fgE/BAhMICDQJ2iSKV4qsMLNb3tBPZ++V8p2BAIICPQATTCFMAKrXS9/Bu/U+zMhf08gkIBAD9QMUxkmsPL18mfoQv2ZkL8nEERAoAdphGkME3C9/Dm9U+/PjWxBYLiAQB/eAhMYKHB/vdxNYO83w6thBy5SQxPYKyDQ90rZLpuA6+XHOurU+zEvWxO4XECgX05uwMECTrG/3gCh/rqdTxLoLiDQuxMbIJCAMD/fDK+GPW9oDwS6CAj0Lqx2GlDA8+VtmuIovY2jvRBoLiDQm5PaYTABj6S1b4hQb29qjwROCwj004R2EFjAKfZ+zam29bWwXg3bz9ieCRwSEOiHuGw8kYBH0vo3y/X0/sZGILBbQKDvprLhJALbM9P1f+vPil+sclWrnHq/Sto4BHYICPQdSDaZRsAp9utbJdSvNzcigXcFBLqFkUXgPsw/ub57WWu9GvYyagMR+FhAoFsdGQS89W1sF70adqy/0Ql8FhDoFsLMAjVI/qOU8te3IlwvH9dNp97H2RuZgEC3BqYVuL/xrRYizMe3U6iP74EZLCzgCH3h5k9a+v2LYupz0L4lLU4zPcoWpxdmspiAQF+s4ZOXe3utvJZSw7ze/OYnjoCj9Di9MJPFBAT6Yg2ftNz7o3Kn2GM3UqjH7o/ZJRUQ6Ekbm6is+6NyYT5Hc70ado4+mWUiAYGeqJnJSnnvqLyW6PnyeRrt+fR5emWmCQQEeoImJizhvaNyN7/N12in3ufrmRlPLCDQJ25ewql/dFTu5rd5my3U5+2dmU8mINAna1jS6b73XPlWqufL52+6R9nm76EKJhAQ6BM0KfkU79/BvpXrFHuexjtKz9NLlQQWEOiBm5N8ao7Kkzf4rjyhvla/VTtAQKAPQDfk5xfCfPOOg6Py3Iuj3uzorX65e6y6gQICfSD+gkN/dHq9UrhWnn9B1LMy9c92tJ6/YhUSuFBAoF+IvfBQj4LcUflaC8Op97X6rdoLBQT6hdgLDvUoyCvH30spPy3osnrJQn31FaD+LgICvQvr8jt9dMNbxfFc+fJLpHiLnDVAoLGAQG8MuvjungW5a+WLL5Cb8h2lWwsEGgsI9MagC+/u2el118oXXhwflC7UrQkCDQUEekPMRXf1LMgdlS+6MHaW7S1yO6FsRuCZgEB/JuTvPxL4rpTyt1LKvzwgclRu/TwTcJT+TMjfE9gpINB3QtnsC4GPvkTldiPPlVs0ewWE+l4p2xF4ICDQLY+jAs/C3FH5UVHbVwF3vVsHBE4KCPSTgIt93AtiFmv4xeXWyzjeS3AxuuHyCAj0PL3sXcn/llL++s4gv5VS/u3t2fLec7D/3AJOvefur+o6Cwj0zsBJdn//ZSpOqydpbMAyfIFLwKaY0hwCAn2OPo2eZT0V+uPbJD45Gh/djtTjby8nquvMDwECBwQE+gEsmxIgcImAU++XMBskm4BAz9ZR9RDIIeDUe44+quJCAYF+IbahCBDYLeDU+24qGxL4Q0CgWwkECEQVqKFe/2yn4KPO07wIhBAQ6CHaYBIECHwgUMO8PlVR//ghQOCBgEC3PAgQiC5Qv8DF0xXRu2R+wwUE+vAWmAABAk8EXE+3RAjsEBDoO5BsQoDAcAGn3oe3wASiCwj06B0yPwIENgGPslkLBFxDtwYIEEgg4NR7giYqoZ+AI/R+tvZMgEB7AW+Ra29qj0kEBHqSRiqDwEICTr0v1Gyl7hcQ6PutbEmAQByBGuq+wCVOP8wkgIBAD9AEUyBA4LCAU++HyXwgu4BAz95h9RHIK+BRtry9VdkLAgL9BTQfIUAgjEB9i5zfY2HaYSIjBfxDGKlvbAIEzgp4lO2soM+nERDoaVqpEALLCjj1vmzrFX4rINCtBwIEMgh4lC1DF9VwSkCgn+LzYQIEggg49R6kEaYxTkCgj7M3MgECbQU8ytbW094mExDokzXMdAkQeCjg1LsFsqyAQF+29QonkFLAqfeUbVXUHgGBvkfJNgQIzCQg1Gfqlrk2ExDozSjtiACBQAL11PuvpZTtunqgqZkKgT4CAr2Pq70SIDBewPX08T0wgwsFBPqF2IYiQOBSAafeL+U22GgBgT66A8YnQKCngEfZeuradygBgR6qHSZDgEAHAafeO6DaZTwBgR6vJ2ZEgEBbAafe23raW1ABgR60MaZFgEBTAafem3LaWUQBgR6xK+ZEgEAPAaHeQ9U+wwgI9DCtMBECBC4QcD39AmRDjBEQ6GPcjUqAwBgB19PHuBv1AgGBfgGyIQgQCCXg1HuodphMKwGB3krSfggQmEnAqfeZumWuuwQE+i4mGxEgkFDg91KK34EJG7tqSRbzqp1XNwECrqdbA6kEBHqqdiqGAIGDAq6nHwSzeVwBgR63N2ZGgMA1Aq6nX+NslM4CAr0zsN0TIBBewKn38C0ywT0CAn2Pkm0IEMguINSzd3iB+gT6Ak1WIgECuwRcT9/FZKOoAgI9amfMiwCBEQKup49QN2YTAYHehNFOCBBIIuDUe5JGrliGQF+x62omQOCRQD31/k0p5RMmAjMJCPSZumWuBAhcJeB6+lXSxmkmINCbUdoRAQLJBFxPT9bQ7OUI9OwdVh8BAq8KuJ7+qpzPDREQ6EPYDUqAwCQCrqdP0ijT9E1D1gABAgSeCbie/kzI34cQcIQeog0mQYBAcAHX04M3yPQcoVsDBAgQ2CPgevoeJdsMFXCEPpTf4AQITCQg1Cdq1opTFegrdl3NBAi8KuB6+qtyPtddQKB3JzYAAQLJBFxPT9bQLOUI9CydVAcBAlcK/P72athfrhzUWAQeCQh064MAAQLHBVxPP27mE50FBHpnYLsnQCCtgOvpaVs7Z2ECfc6+mTUBAjEEXE+P0QezKJ5DtwgIECBwVkConxX0+SYCjtCbMNoJAQILC7ievnDzI5Uu0CN1w1wIEJhVQKjP2rlE8xboiZqpFAIEhgq4SW4ov8EFujVAgACBdgKup7eztKeDAgL9IJjNCRAg8ECgnnqvoe53q2VyuYBFdzm5AQkQSC7genryBkctT6BH7Yx5ESAws4Dr6TN3b9K5C/RJG2faBAiEFxDq4VuUa4ICPVc/VUOAQCwBN8nF6kfq2Qj01O1VHAECgwVcTx/cgJWGF+grdVutBAiMEHDqfYT6gmMK9AWbrmQCBC4XEOqXk683oEBfr+cqJkBgjIDr6WPclxlVoC/TaoUSIBBA4HcvnQnQhaRTEOhJG6ssAgRCCrhJLmRbckxKoOfooyoIEJhHwPX0eXo11UwF+lTtMlkCBJIIuJ6epJGRyhDokbphLgQIrCRQQ/3TSgWrta+AQO/ra+8ECBD4SMD1dGujqYBAb8ppZwQIEDgk4Hr6IS4bPxIQ6NYHAQIExgoI9bH+aUYX6GlaqRACBCYWcJPcxM2LMnWBHqUT5kGAwMoCrqev3P1GtQv0RpB2Q4AAgZMCQv0k4OofF+irrwD1EyAQScD19EjdmGwuAn2yhpkuAQLpBVxPT9/iPgUK9D6u9kqAAIEzAl46c0Zv0c8K9EUbr2wCBEILuJ4euj0xJyfQY/bFrAgQIOB6ujVwSECgH+KyMQECBC4VcD39Uu65BxPoc/fP7AkQyC9Qj9S3o/X81arwZQGB/jKdDxIgQOASAdfTL2GefxCBPn8PVUCAQH4B19Pz9/h0hQL9NKEdECBA4BKBGuq/vP25ZECDzCUg0Ofql9kSILC2gJvk1u7/w+oFusVBgACBeQRcT5+nV5fPVKBfTm5AAgQInBKooV7/uPP9FGO+Dwv0fD1VEQEC+QVcT8/f48MVCvTDZD5AgACBEAKup4doQ5xJCPQ4vTATAgQIHBFwPf2I1gLbCvQFmqxEAgTSCrienra1xwsT6MfNfIIAAQKRBLx0JlI3Bs5FoA/ENzQBAgQaCbie3ghy5t0I9Jm7Z+4ECBD4fwFf4rL4ahDoiy8A5RMgkEbA9fQ0rXytEIH+mptPESBAIKKA6+kRu3LRnAT6RdCGIUCAwEUCrqdfBB1tGIEerSPmQ4AAgfMCP5dSvj2/G3uYSUCgz9QtcyVAgMA+AS+d2eeUaiuBnqqdiiFAgMCfAkJ9scUg0BdruHIJEFhKwE1yC7VboC/UbKUSILCkgFBfpO0CfZFGK5MAgaUFhPoC7RfoCzRZiQQIECilCPXky0CgJ2+w8ggQIHAjINQTLweBnri5SiNAgMA7AkI96bIQ6EkbqywCBAg8EPA2uYTLQ6AnbKqSCBAgsEOghvqnHdvZZBIBgT5Jo0yTAAECjQW8eKYx6OjdCfTRHTA+AQIExgkI9XH2zUcW6M1J7ZAAAQJTCbhJbqp2fTxZgZ6kkcogQIDACQGhfgIvykcFepROmAcBAgTGCgj1sf6nRxfopwntgAABAmkEhPrErRToEzfP1AkQINBBQKh3QL1ilwL9CmVjECBAYC4BL56Zq1+fZyvQJ2yaKRMgQOACAaF+AXLLIQR6S037IkCAQC4BoT5RPwX6RM0yVQIECAwQEOoD0F8ZUqC/ouYzBAgQWEtAqE/Qb4E+QZNMkQABAgEE3P0eoAmPpiDQgzfI9AgQIBBIQKgHasb9VAR64OaYGgECBAIKCPWATalTEuhBG2NaBAgQCCxQQ/0b36ceq0MCPVY/zIYAAQKzCGxfvfpDKeWXWSadeZ4CPXN31UaAAIG+AkK9r++hvQv0Q1w2JkCAAIF3BOpjbb+WUrbr65AGCAj0AeiGJECAQEIBN8sNbqpAH9wAwxMgQCCRgFAf2EyBPhDf0AQIECBAoJWAQG8laT8ECBAgQGCggEAfiG9oAgQIECDQSkCgt5K0HwIECBAgMFBAoA/ENzQBAgQIEGglINBbSdoPAQIECBAYKCDQB+IbmgABAgQItBIQ6K0k7YcAAQIECAwUEOgD8Q1NgAABAgRaCQj0VpL2Q4AAAQIEBgoI9IH4hiZAgAABAq0EBHorSfshQIAAAQIDBQT6QHxDEyBAgACBVgICvZWk/RAgQIAAgYECAn0gvqEJECBAgEArAYHeStJ+CBAgQIDAQIH/A/PCJ74izAcgAAAAAElFTkSuQmCC';
    }
}
