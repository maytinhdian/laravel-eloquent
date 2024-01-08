
# Lưu ý

## Quy ước tên table

- Tên Model: Post => table: posts
- Tên Model: ProductCategory: product_categories

## Quy ước khóa chính

- Mặc định laravel lấy field 'id' làm khóa chính
- protected $primaryKey ='postId';
- public $incrementing = false;
- proteted $keyType = 'string';

## Cấu hình giá trị mặc định

- protected $attributes = [
    'status'=>0,
];
