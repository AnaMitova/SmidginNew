<!DOCTYPE html>
<html>
<head>
    <title>Edit Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="max-w-3xl mx-auto py-10">

<div class="bg-white p-8 rounded-xl shadow">

<h1 class="text-3xl font-bold mb-8">
Edit Store
</h1>

<form action="{{ route('stores.update',$store) }}"
      method="POST"
      enctype="multipart/form-data">

@csrf
@method('PUT')

<input
type="text"
name="name"
value="{{ $store->name }}"
placeholder="Name"
class="w-full border p-3 rounded mb-4">

<input
type="text"
name="city"
value="{{ $store->city }}"
placeholder="City"
class="w-full border p-3 rounded mb-4">

<select
name="type"
class="w-full border p-3 rounded mb-4">

<option value="buy"
{{ $store->type=='buy' ? 'selected' : '' }}>
Buy
</option>

<option value="taste"
{{ $store->type=='taste' ? 'selected' : '' }}>
Taste
</option>

</select>

<input
type="text"
name="address"
value="{{ $store->address }}"
placeholder="Address"
class="w-full border p-3 rounded mb-4">

<input
type="text"
name="hours"
value="{{ $store->hours }}"
placeholder="Hours"
class="w-full border p-3 rounded mb-4">

<input
type="text"
name="phone"
value="{{ $store->phone }}"
placeholder="Phone"
class="w-full border p-3 rounded mb-4">

<input
type="text"
name="link"
value="{{ $store->link }}"
placeholder="Link"
class="w-full border p-3 rounded mb-4">

@if($store->image)
<img
src="{{ asset('storage/'.$store->image) }}"
loading="lazy" decoding="async"
class="w-40 rounded mb-4">
@endif

<input
type="file"
name="image"
class="mb-6">

<br>

<button
class="bg-red-500 text-white px-8 py-3 rounded">
Update Store
</button>

</form>

</div>

</div>

</body>
</html>