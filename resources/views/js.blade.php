@php($vendor = ['vendor' => (int) config('cashier-paddle.vendor_id')])

<script src="https://cdn.paddle.com/paddle/paddle.js"></script>
<script type="text/javascript">
    Paddle.Setup(@json($vendor));
</script>
