<?php
    session_start();
    include '../groups-d12b45.php';
    function checkAccess($groups) {
        if(isset($_SESSION['user_groups'])) {
            return count(array_intersect($groups, $_SESSION['user_groups'])) > 0;
        }
        return FALSE;
    }
    if(isset($_SESSION['user_logged']) && 8 > 0) {
        $now = new DateTime();
        $fmt = "Y-m-d\TH:i:sP"; // ATOM
        $end = DateTime::createFromFormat($fmt, $_SESSION['user_logged']->format($fmt));
        $end->add(new DateInterval("PT8H"));
        $diff = $now->diff($end);
        if($diff->invert) {
            unset($_SESSION['session_id']);
            unset($_SESSION['user_id']);
            unset($_SESSION['username']);
            unset($_SESSION['user_name']);
            unset($_SESSION['user_surname']);
            unset($_SESSION['user_email']);
            unset($_SESSION['user_info']);
            unset($_SESSION['user_groups']);
            unset($_SESSION['user_logged']);
            unset($_SESSION['user_redirect']);
            unset($_SESSION['user_redirect_attempt']);
            $redirect = 'user-dashboard.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('0','1');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'AEBC8786-C8B7-4743-B214-D1D992C31321' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'user-dashboard.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/webp');
    header('Content-Length: 7524');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRlwdAABXRUJQVlA4WAoAAAAQAAAA0wAATwAAQUxQSFkNAAABwIb//zol1j6/3+//nxllhsEuVFIwULCVY62Yx+7u7u7uXeWsYh+7t+xuVuzu3kDCohGGob4PmJn/f/DMeM59P4mICcB/3Rnn/FuCyeUbD1m279yFo2v6+YpvAa6vPf7AyywiomwzEeWeDBFOnvDodyCaKPf1oUU9/1HZw92nRq8tibTF4MQJ73GXMinj5g8dvTQc1lmZrXSyoJPGSgw4n03RO7uXlaBY2kUjnTK5wZZkigxromdQ1SsjXDhfhYbcpZTdLVwY1JZfvOBOFiu/6APdHVGKw47yi2fCqWI+YWk5vzSWYd/S6Ue5E8U8wzJM6ypx2Hsw9YfzXGxZWsaP3gx2L/A8yug0yUNjaHsFBvuzWTQKTioXQghmC6v1O4UHc+THmqbrWmdEFzh4zcnbjx9d2zWouBV5VnbScAn5stDjL4FwOuV/rPmDiNI+xcbG5VBsb5an3Fk66Yv8Kf1Ew+BsFux/h8zhC9pWKeGq1xs9e77O/SeAmn/lTJKRP/lC2sidDLn/K7o9opwEGyukXhSoFfc+hCF/ssF0vgAcNCvRbUp1FVjwNbrcQobt7GCkXDr2ZUXk1w7Zj0vAIQuPHtveE4UxRa6h9LqjBMXTMoqFXnFHfm2aFukLBywH/3Dl5B4i8yo9lNZ+RKuMULE3hXnJyK+Nkz7VgMPlvnNepp1oUf8ynanHoJAPNMW25lBzMN2XkF8bJSY3gKOVWxzOSlnrY1yU+aa7BKXSUrriCVXZJoox2MDnt7ZHSGJqCBys29CH9Pe0Itr+0amzXaFYs5326aGuW3SqebANZSjMDm1TU5rDoTL3uTF0q69WhNymXd5QrjtAYRJUHk5t1pmacCvf0Q+qsT6Z8d/BkTLf0BQ62UJigUcpoiGHcnkvrZSgssvb28LzZuaWEbVFngE0Xy0xkSJrw4HySpvMtL+OQPlNuX/1laGiWE8rJag9hXoC2rnZRL8VBDCVJqgkh9IdXzhOXmVbdtaWqhyF5qZ8mecGNdl0WiOgtm/SPS0A5jdm9RI9gOXUW52ih+hgYThMXnVHbsb6igy6Ye9ohzfUbUX7JKituZDTEDazbdRUlcDHtFSGo+TVduWa1vgwSB0f0sVgDnVLxNw1QG3+PS1mtokzVFkF0TclsRuHg+RVtlFGmDeDaHSRXnWXoDLbaKoMgI+opwIbS0dk2C4/Sy6mrNAmuh0AB8n8NudkbajAwIN+oYRpBqjum7UQAPxpJ1PEh9O1QlBYNOmFrIR994w2GuAYmfcaM22vxACvDbk5a8vCjnPSS+UJof2K+Ci6VRJKq9AZocDwPSX0EXCMZVak0b5ADhRdkEKHghjsyK+c43na0F4l0jwKLw7FbWg1bGaNH9I5PzjGonMS6GBtAWiHR1FEiIBd5cgfkLcT/VuBcTf97ArlU2iITW6hZJ4mwyHqx8XQ2UYCEC3v0vNeMuzs8nmOhV60AjZXu0dLZChnO6iBDbzVM7pRi8ERyn1e0bWWEsC899GnCXrYXRf7vYWRNN4WMTTtY0cOFaWb6aWtldhIpjk6OELR5jY97iYDvGpoqnllKeRD6cmvLM9iameDx0E65glV3eIfyZZEj7/pcnUGB8jrn6bIYTqA+W/NoX2VGPIj++W5BIDtpSpWpMFxqaMkqBtIO5gFv4MUN0qGA2T+uylxZiEAJb9Po8uNOfJpzwQDAHEjzmiB1TxPJ/2gdi8aAgAFpqTQXi84wuLLTdmrywLQjY6mF71k5FttDy0Aw+ffRZ7i/8r5NFCC6qtyKwP8uzv0qI2AA9SOiqVfAxggWt2muJmuyPeVaDEAqW8UbXOH+iLiTxke2yhhigscoGhxl66FCID5HaCcDeXxFXanZkDlU3QnhMOOhZP3FZiaRJs84AgrHKC/B2gAuM5LpRO1OL5CttbkqpuZ8XGMFnZtQPee05EaHA6w4LQ006LCAETH5/Sgg4SvUr6fMvVJyvclYV++huhGiIAD5E3u068VGQC/X+nThIL4SitnUMIqDwb7ytPMWdM1+I/IuJD0xb2q1KpXr169GiWZoiJr6VV7AaDgjLTcMHd8rSXP0oUyUJNXDLTGG98gWsmh3BDEAHD7MM6FpDMWL+dfs3HbPqNnh24/cuXJu8RMspxYUwH/5xtaaQTAmz+gMzUZvlJ5QDSZKkPNsnuj+1oSdQ59Do9MKw/lbOP7gkD7Xdw2xoVUoLC7f62mnQZNWhS2+8ilO88jP3/JJlszkmLfPLhyYu/axcPbutimX00vm3IA7tvofV8JX6lofePuXLohqRESG1EZeeXmx+l5DfnM70KFyllzAK+Ei4JxSePmXim4Tf8p3287GvE0KimLrOakfY58fif8xIEtofMnD+/TsXlwkF+54q5aSXAGxdXu0vrCAOTBn2hzGXytlY7ST65BtBgqNk37TQeAlx55j2In6eGfNQ6KWYlLWb5y3Qf0eM2Bc/f+jM8kyxkfX10/unn5tOE9WjcI8itX3FUnS4IzBrvzXl9iOnAAVc7RtcYc+dFjtL8yMdKUOERgNDVWQX4QXxC8cLu9KfR2YhGAraOqjHEuhCTrjCU8Axp0mbLzHVHsg0wisznl49v7l37duHh8n1Z1/EoZZIkz5H9pHh1yB6CZboocJMMqE7KuUKny7kW1QpmYEkeNFLGF2Zs9AH44sZAK4oJp9Ixj8ZR9sosLALgnUPi+XfsPngq/8zwyLp2sXj5IdKOpV6nCeo0kOMNXLa3PnSoDqBphWmQAuGT0adBj8o8/hz+NTjLnZKVGnpvqqUDeStn9mKJuiS05AGPcRaECfI/GJb3+eai3gMW5ZDnXFPf3w4s/rZ7aM7jKa5osBeTcLYr/jHyVuTMD5JEJ1ytpyndZduxZIhFRatSj8OO/7d+775dTz3KT+zNrUmmMp9RuDEr51Z0MAJrQD2CcKQJ3dZM5rBqiHjeqV6tGYCWv0m46ScMBIDh7HRenP1cAeKudtfKUGhdom1ubadXyUQtaB0hNzhK9uvImLTvu4eHQMe1rexXRSYJblv1+/2ywJA+41q9+WmxTKOfHv3zfuXmTxrtobPU9R/f+0NNVgcIeNBs2Nrk4FoDbi9dGjKZ2gC6MXvkAaPEXrWXWuP8PH4iuCXW4rphQ1iU9ct7iq0Tpz479OLSRl0HiUHFXkjEPb3HnfkiDlCdVoGbQfbJoblbv/NPIdLrnqZ44lxNkRQRViKchgNhFbVDdvIzBeIw2FgHEYBNFuMOy3GhfdtbudhEJbkqYKFS1+9Ljb1POGRQx/057iO4M8dVwqF7b/BsHUGbP51najhmni0NdTWDzDgNf0goOLjQlZtFpSTV/81PZktfvG3rTWQkYQCe48ekTHYpfyunKIVXcRhSqR17JZ8Idytrkx3HQXNIWrg/st+5qPBHR5ysTtIoAeSNtLQB7Fn+SWRMQPd5f8Zfm5K7WwI7saHpZWCwQa3ZXbSathMWAmOPajblNgWIx2XXZBmoP73tk/mH+trtEtJwDvGDgxMvZFLPSnwHlk1/qLHFj8NQj0UT0KWLzhLYBhQWUs2oR9C8J9ix6hSYzGLea50qGXzOGMeZRQL3Ccce4pSIJb1zUkq5TsIVCr85KcmSqEaw1XRSd6LWu8bvc5zEZSU+3zbxM50aOWn70HVHc/o5GANAez2wPAHLAmMMfiLIebBpYzSgxqOs6Oz1ztIA9A+7TdA7fBzEhrMqzv4NRbnfycAuSUKEf9YJFNpHGAwBrUFJZOdNTjYWpNK676wKaPGZ3N5rIJufGbaUPTTRuJd0kBu2yT0Q57y8tCinMkdfwS0ZnsIKNVj4lyrm/upOHzKC66PWC7tWFPeURXz51ZAiIvlGOdU46VZJ1j7yRuyhP8O2VTJF0Lb6Ipbrpzw15SppDlTWkocjLTxE9cdFfIxpXIetOmBTy2/3tfrDOCnn7ltMLWHU9RYvLddjwN9G7PX19ZNiVr6PkOXrYs9JJOusNeMScdBHzTfMlKezPlk0pBPAtuYue6TWGwlqb6tJmZmkDhSCvP21girzHyxYw6q9TPkDJZc2Z5i7t5uCCQf2eROYcSrgws56ewd58xDRP2NMwO900SQb4wQiN/teYVqzkpQsl/RP2CjRKfPGZ6F1kXPLz/sIa20l1YLl+R2ZBN7I81GcuAlYDhhSAnYsMnzu5e3U3ga9e6vyMzgYAgD62QcDDi2UR/GatHPBhvwv4ISJKvntg4aSfic40tFImNVyy4qzyeqcpdpCEvMXi78YtE9LEuJEc04ZzFFtJKQf7eEgMEFNv/uZnZSI1g1PLKu+mzNCSsBySTfO0DS4ntjZKAPdZ+ilhqS+HVcFgmV8/xp0Z5r02K3dbJYa83L3N35Qb/ZZuBUj3T/cYdy4rblFpBlUbFIbzyjxWpdGBQA7Lo1LpQuughm0bamC4T0TPphSH0828Vn2hQ3UErM/4OE+G1cJNWgVo4HRz/zVpdKqhgK2aIgxOvai5PYvOhEj4htS2OUXZPzUQ+BaU2nYEILymvaLoZf4c34RFD1NS/aBR502phzu54luxVhYRpf65v3tJjm9HVqVb9+a+Wob/FwoAVlA4INwPAACwQACdASrUAFAAPjkYikQiIaETe72EIAOEtIAK8A/in4j/rt4xf0D8gv279h/wn4t+l/kV/av/B7Hf7H0KH8d5EPrR9w/NL+6euH+M8Afej/VeoF+H/yX+q/lJ/WPRh/du1Bx7+T/1X8u/gC9LPkH9j/rX7X/2b9y/XR/Xvyq9wPqP/sfcA/jP8k/sn5t/4f9//qT+Of0jxKfq/8+/s39N/Ir7AP41/MP7t/hP3X/yX//+0H9f/yn+J/aT/Ff//3a/lX9B/wX97/cT/Cf//8Af4h/Hf7T/Wv8j/w/7L///+t9ofrM/U/2Fv0r+8/9/2kC9CKwni1ZPRxzSNgo3smQPZyogz/xm8jaGhS2/JifqihHgYZp7V1RHx/Dh7vGjLbZmnLp2U+6VPe37A61L3xE9RBK4rd/C420EMtQLwT0SIEZSAu6Bcmv5g1J7+UyfBLRn3U40p9ROucXWw73RvvcF3pFFt+PVt/CR8Nu83vvDuvppmV5UKdplqj8e97INWlIV//aiHZthXThgEdT1IPWOBvyMSQoU5v8hC7/fGNaYbU4wKTHDLGhXK5La7CfpFpVvaD1UJNvcW5nmyJf/FiI3aEEZcVXSTBkscye0Epg3yMl4ixJeYhem4Mi03JNYmUvpaQCV69f/Dhr+Ey1Ev4yaA1yyLhc3/4VVuf7t/9LvkOdarogNJCav2kIt/WwAAP7/DWSK8J6CYnOiVRzJxp6a0OM8NRn0nfhMbcLWztjdWeR9Vnb9jDCFLD4UNurvJ8aIEdW5WL2nrlbYLnPTG6jwlPNDpr8pxcfE2pi0rH9zTLLKTMzid/mv3Jv10opdrGTRiw8Tdtl43puPVcn3Ukwzp0JP3fNwH4o5VSbbiBWmZGkNvh2hRcQZb+qUkCyN0Eev1XjVTHmjrQQjwpMF+mX5NIce3kLDnvzAg+JfI3fHbEtzOe+Q8hfqw4paw/qhv3FPuqGPqRevU5cQWTAq6s2jIqV5sFMy+N9JIx5uW2+YAUmtBBom+fLESxcuR8Z12oX0uwtfxk4U9x7hDYlIkyGOdKyurfOJvlT7GNIbt2o+D6tnm64P+W6UcqgABB00Mmop40/4ohUCY4xKrbUQ8yrGiUMM1Q/+Q0iyTzHY6vWkh9940dIwi7jC4ygcCiKFVwwfZcChwauZFhmuqpndjscFmYx8ztXwTdQfCID7cwKVJEWMZyyaAluoVH8yUTBz9ss+z7jN4NitOOLnqMcPMwfferbEgXrUowEh7HWMoBk/Y2xqf/b8XdKCQfDY3ZJfqrJ0B/cNOK4g9ciqQ47iNte5BkyxoWl/CWVxg1IoCz2adZt5YV4bvzTrFHyrUUyXRbQdUGwPx63oJCTQ7YLr8SRR5khawCefqzvUksnM7UxSV9C3HkxXS5kU4UA8tzWV6gect2TjuKLx28O+voYszYLG0DcmMHdhVd8E4/9audoeb9/dK79/KZ0QEdIt0GXYkJ8w6X7LuaI0B9zHdSwjNZ3PACga4WNUIOw56PpqCCXEzAsW2GIXgHcsNUHuhQPfPRwrS2mw0uXT4Lw320mgYdJCkX+HFbBZGAGrlpepKgutJPHloELN8+xvcbXCBYzzYB8VrvH/AnHhd8FIc1xby1iChP75Pd5x067P76mzFK7WGCF6mBn/bWLJh5L4JWLuCsKWSoE2rCtR3hyOEfRTNIakKwVdvm9snS116l9hY7AapiqbCDnUNQsP99lGmHHv0I+nGeh2YgHziqxXq04f3zA+ZqQN/KVeykdPjyTZRUfuukw1sPzcVB1PTXKOZ5Aw2oxit6gpIzNsNf0dwz1mhn3hQuYf3+SoHS1n2rHAWxdScADIMkeY0Zt2JSJuwjS81HZuhomANFmBacfh6gsTsDcwnQJUjLbi0E/m229ZWdux15g+s7VlfX63SZT5CW4tnYDb9DR0xO15qNODcvQiN64Rx1Y7RhoHPC6HdX7bXH/vr/Bw/Vr/7ywq//NFo3rncQ1+ABBeYhJZBs/HBxmcCtvJpfS3s0ju8O5zqHDP8CQB5l4ThM+Xpj6eOL4/0O6FRyrvdJQ9Ata0FKNlNKJRu/UcF4q6eZNqKcaYL3Vig41or6xQ9fDSLTOz/bCEKVL9BliQ0YJuhMtS+hll7wFA5Cqd8McF6e1wwPxoY/Hp55vlwZkCt/mh/Dg6MEbNFNvu+DxLuE3EL1CU8p8lvdr8vBQLCEaXoYiNkzxhixy4rsZ0KnKbEhvkikWqtV5Clj6lvRUSvGhy1FZ7HmGeonDdLBAEbd+jmkotZ930EM20rR6VXfujluCpVSjr89eJMNW7ik2MplTeoWtJ9Tlqm4Ei/9LjjU9VRC9nGDr4KD7QdsPzmARE8O2aU3j9JtAFBLe0WePXc9tjbnfgXKwd/E7qpi7Df9D/twMYANd3u2C32Jxa92DHnqKYpfzZD4XQdUM0B0AWSowbqI8hEy5B2qnMmd75Vgh0+3aOTWl1b7qNZUQIjvPv/cKpAPMqzX1NwEjbXA9k8rAmMq1OFEbewHwXsiZhp6l8V/gFgqE2aq0Nw4GU6g4+j2/tVArvR1tp7K4ZuFafWCbiFmk8+lckZ362l7yS/Mjz9Evq4PBAwZyG4JflJBONQjRoUH+eriXfPiq/gT1cfZ/EIjkfRWQL7sqoCjUHnhWNBiyxJhK3r926+//6cMsXz8tfFiBDFjpCgPJOmwJDHzg7A01lFcjGuViEF4KMPU9V7/638pHKVDJBQUeGdP60t7oaZG8+NO3bV0FcacZn8YttsbZl9YBgARYrKFxhxVZwcSn16le5WQL75ozD0u/KSXHD/jY8vwOkCqHbM/7otdREtymsHbg00krpxN9Txy22F08P460ILFvGSLnOuRt2mhbAvaJsoNoqyxWnzuw0VTOIBavO7ZKWWrpCvX5JX98CC5+9cGTTiNaWs7mRcE0mHV41pS21bJK6HJjfVoB1MmUO/N1KQ97QfOursOV7UhJn1mwtlm1ZyFrogj7Qh4zrnJJtT1RJZSwvVwJWvN7+8pzwymGqnHy6t3/fgyBFj9Ibj7nbxOYKkhtcgJQsGCawkZ5FHAHpH4dAmFLtPWDHgt7PrYvCNxpo0xyIFjqJ+TOJlyRCCUIYi7S2eCBYr6ojsuUmty1Ee6TkP3dzEKZ4UxlMdy/Vg/qgKs86gd/tq03ROr2CMwoazYp4F72FJ/HY/5y3l4Nct/ydx4MuLznGneuIzC+dC69zSKbK30h5wY7tskqeUZHmS+U0Va1/dAG/yvAvuhvxNZdYscttCFANxiKF/AXQys2xRIYSi2f2Am/juCZHq88370lt5SaLL9wpPZokhYQzMtRBtmYS4H703F49Ti98dL6KOJjLWNicPOXXA83MpSHjQ2idL3r/fG6r26QQmMzb6tPu3h4yJ4mQfxJC7Z88bLefeJiF2LSFa1nv+opKKyMXdNLsNrqs07fSrvPhPwFFdarTB0ho9D19ogzvNVE8yKstWjuI6NjFc/wxLZHf8z0TwKvvFidCx2FrIsjLSTu0tfVZM1Zqi6iLoX7MovCYPj7LsAZ15rQVGeNYiw9JON3aSeoup+6kXNIBzs5RGpRY//c5TvTGlCRc3pywMBUF0xTX8c1sOpy7ytCfLfzXh2S/GEaU3vuZWGL8d4Y/FyJSL0i3HA96egQ7zDGvU/wvsv62OEXfhg4cR7klOKusOSH1SotxdoxqxWUwvJQwMfiHZsuL4l3C4TcVfn18ZQvUDze+L5sXkOx9l8OIoZCdSFNJnFZVjFbxLc1/HTZGZzyJpTWeGgMyLMLaaqSLCbzWmPlUqq1GdUE7JzchWu1O+LICCjqXwq/6TZsU4dRI2NeGUKOzFihwQUiJ8ZLLhJtafn4RP+R8tPVO7xli6BEKIpQd5UMDvPnsekwtNfKoULGfyFGnaTOWDvp+0I5J3iZUuB6iYTDAznnHbn2/L9HkUEn5QhbQk7zB9QE6jib4SqGccFPVcoO8YWVB3cHTHINPrua+EhodHwQ4PxhE+n/aH1ogY1UU6UYcJv2iVLIb7kVrKcl7FdgU/6VxGkatzkbboOH4Wi3Pq7WwC68O54/t8gpgtS98WcnzcBwvQ+IQqmfYbTQYzLi+qhKquSFZBsSCejiVVkYnxUW6sMxA7S2lDdGanb4PELFZfxcC9ZtRY/jb6EqZPHp7ia+bfrFBeQcDXd+C+JuRzJKiOPeqtX0HOQ1B3JuVEA9hK0vKU7qRz5GPqVbuQP2+c/KBniQFIHds3koRnwlZdK7SbktuNV7GwxhvJ9oTtGKpqVQtIR912E9+7Nz69RDpK9yOGA8i8aahI/cemSd6znLx5Q6MpGWwPHzxdU0GjU9dtIt+uBT3/3SOz2ocUg3kcyHBBeqcTuQO4nLim9VNtS6Hys4KBbyK6swT0ceaFzwdet2OdWPJBpoyqoC5QpG0vtHVaG8WRTYBC3veqvzvwErTlZdsIl0yiJulqqmI87QYf3JAyKOE1RU0QQfFQtMV6zFy1r8SmRNmC114nvksk63TEl6c/iG2O3sIRsuUeyCIQgIuhTDjvU/5KQ+kIV80kbnqCDsYT/mQEUJioMcW4QMSrswUPKEKMTNbjJqBJK3glij/E5bO0ahv2uGrLP1iWx91RyrJuZGMl0CC3xrXvG2KupVcO45v51y2fpApQYr/2EVxTAGEA9SziJQQEA/hUR6Ps1rJ4u/uBvhlrJUvbdtxa4nMGDNcjuhDWiy58iDgezC5wsNapZZkOmxF9nOOqGTcfY4CtdupvPefZcAnoyXC1PP7KgmpovtxOxDB9yULUcw6zDNYyzyTCMkllH+pnSiK8fCR9oDKGFGnI76xuWpii8xYXrZLYDkIiwj7q+VvAfEtLuno6nQBZTHEeOm7MO8S5vAM8Z+qDLfoNXS07cM19pMDWSyWaq8lzDR/zmw2fzHh+yZZq9kS5JosnGZiIO0gvkAoqdwt8d+/Vjj//4Ay19FNYob3/am0Di5dfKMIsJQT9LJmqsq3twF3+T0Le7HjlsqIEtKfJwi8/+wcHhAu8u3HKC3Yp6Bo/pDE8SPTfV5G1TsY/EULxRvH9qp+a1KUUyeP7ZLsCBzwV97whvGddsB8kxozXzWvT+dIVwUh7LhTyixmzctFMaOt+yp6eTKza3n/NqQGMpF/+cE4w7YMghE7AN5n2lQVoo7YCtbbbhdN5fw60uZ9LKLIV1aH4gaL3nVYnAXwBRPNPXUIGtd1nIUOyPbChDYF/HcooQlcZ9nbPzjsPl3Xz5Mb8HkC9bCVQckzcIu+lJGGIPW9ikbphR8tCkndCUTKCrAznecp0f5wR4yGIrLiIgYZy4rC9t06XgsnqLq//1WxHQkj9rcutzc/At7nf+UAgGCQ29mLTzmsRT/Iyga/vND8Djw/Mu/UlauBdDBFUrSvscvLyegvi8SeGEhVgAAAAAAA');