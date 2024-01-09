<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Item</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Edit Item</h1>

        <form action="{{ url("/items/{$item->id}") }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')

            <div class="form-group">
                <label for="category_id">Category:</label>
                <select name="category_id" id="category_id" class="form-control" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $item->category_id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $item->title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control" required>{{ $item->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" name="price" id="price" value="{{ $item->price }}" required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" class="form-control" name="quantity" id="quantity" value="{{ $item->quantity }}" required>
            </div>
            <div class="form-group">
                <label for="sku">SKU:</label>
                <input type="text" class="form-control" name="sku" id="sku" value="{{ $item->sku }}" required>
            </div>
            <div class="form-group">
                <label for="picture">Picture:</label>
                <input type="file" class="form-control" name="picture" id="picture">
            </div>
            <button type="submit" class="btn btn-primary">Update Item</button>
        </form>

        <a href="{{ url('/items') }}" class="btn btn-secondary">Back to Items</a>
    </div>
</body>
</html>
