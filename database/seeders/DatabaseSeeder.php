<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{Role, User, Company, Branch, Warehouse, Category, Characteristic, Product, Stock, Cart, CartProduct, Order, OrderProduct, Invoice, InvoiceItem, PaymentCard, Review, PurchaseRequest, CharacteristicCategoryProduct};

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Crear roles fijos
        $roles = collect([
        Role::firstOrCreate(['name' => 'admin']),
        Role::firstOrCreate(['name' => 'client']),
        Role::firstOrCreate(['name' => 'company']),
        Role::firstOrCreate(['name' => 'warehouse_admin']),
        Role::firstOrCreate(['name' => 'branch_admin']),
    ]);
    
    // Crear usuarios con rol client
    $clientRoleId = $roles->where('name', 'client')->first()->id;
    
    $users = User::factory()->count(10)->create([
        'role_id' => $clientRoleId,
    ]);
    
    // Continuar con la creación del resto de entidades
    Company::factory()->count(2)->create();
    Branch::factory()->count(3)->create();
    Warehouse::factory()->count(2)->create();
    Category::factory()->count(5)->create();
    Characteristic::factory()->count(10)->create();
    Product::factory()->count(20)->create();
    Stock::factory()->count(30)->create();
    Cart::factory()->count(10)->create();
    CartProduct::factory()->count(30)->create();
    PaymentCard::factory()->count(5)->create();
    Order::factory()->count(10)->create();
    OrderProduct::factory()->count(25)->create();
    Invoice::factory()->count(10)->create();
    InvoiceItem::factory()->count(30)->create();
    Review::factory()->count(20)->create();
    PurchaseRequest::factory()->count(5)->create();
    CharacteristicCategoryProduct::factory()->count(10)->create();
    }
}
