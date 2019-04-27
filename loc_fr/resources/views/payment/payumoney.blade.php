<!DOCTYPE html>
<html>
<head >
</head>
<body>
<h1>PayUMoney Payment Request Form </h1>
<form action="https://sandboxsecure.payu.in/_payment" id="payumoneyform"  name="payuform" method=POST style="display: none;">
    @csrf
    <input type="hidden" name="key" value="{{$merchantkey}}" />
    <input type="hidden" name="hash_string" value="{{$hashSequence}}" />
    <input type="hidden" name="hash" value="{{$hash}}" />
    <input type="hidden" name="txnid" value="{{$txnid}}"/>
    <table>
        <tr>
            <td><b>Mandatory Parameters</b></td>
        </tr>
        <tr>
            <td>Amount: </td>
            <td><input name="amount" value="{{$amount}}" /></td>
            <td>First Name: </td>
            <td><input name="firstname" id="firstname" value="{{$firstname}}" /></td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><input name="email" id="email" value="{{$email}}"  /></td>
            <td>Phone: </td>
            <td><input name="phone" value="{{$phone}}" /></td>
        </tr>
        <tr>
            <td>Product Info: </td>
            <td colspan="3"><textarea name="productinfo" >{{$productinfo}}</textarea></td>
        </tr>
        <tr>
            <td>Success URI: </td>
            <td colspan="3"><input name="surl"  size="64" value="{{$surl}}" /></td>
        </tr>
        <tr>
            <td>Failure URI: </td>
            <td colspan="3"><input name="furl"  size="64" value="{{$furl}}" /></td>
        </tr>
        <tr>
            <td colspan="3"><input type="hidden" name="service_provider" value="payu_paisa" /></td>
        </tr>
        <tr>
            <td><b>Optional Parameters</b></td>
        </tr>
        <tr>
            <td>Last Name: </td>
            <td><input name="lastname" id="lastname"  /></td>
            <td>Cancel URI: </td>
            <td><input name="curl" value="" /></td>
        </tr>
        <tr>
            <td>Address1: </td>
            <td><input name="address1" /></td>
            <td>Address2: </td>
            <td><input name="address2"  /></td>
        </tr>
        <tr>
            <td>City: </td>
            <td><input name="city"  /></td>
            <td>State: </td>
            <td><input name="state"  /></td>
        </tr>
        <tr>
            <td>Country: </td>
            <td><input name="country"  /></td>
            <td>Zipcode: </td>
            <td><input name="zipcode"  /></td>
        </tr>
        <tr>
            <td>UDF1: </td>
            <td><input name="udf1"  /></td>
            <td>UDF2: </td>
            <td><input name="udf2"  /></td>
        </tr>
        <tr>
            <td>UDF3: </td>
            <td><input name="udf3"   /></td>
            <td>UDF4: </td>
            <td><input name="udf4"  /></td>
        </tr>
        <tr>
            <td>UDF5: </td>
            <td><input name="udf5"  /></td>
            <td>PG: </td>
            <td><input name="pg"  /></td>
        </tr>
        <td colspan="4"><input type="submit" value="Submit"  /></td>
        </tr>
    </table>
</form>
</body>
</html>

<script type="text/javascript">


window.onload = function() {

document.getElementById("payumoneyform").submit();
}


</script>