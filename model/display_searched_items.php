<?
namespace preskok;

$pdo = (new Preskok\pdo_connect())->getInstance();

class display_searched_items{

    public $brand;
    public $price_from;
    public $price_to;
    public $Distance_driven;
    public $type_of_motor;
    public $year_registerd;
    public $year_end_registration;
    public $quality;

    public function __construct($brand, $price_from, $price_to, $Distance_driven, $type_of_motor, $year_registerd, $year_end_registration, $quality){
        $this->brand = $brand;
        $this->price_from = $price_from;
        $this->price_to = $price_to;
        $this->distance_driven = $Distance_driven;
        $this->type_of_motor = $type_of_motor;
        $this->year_registerd = $year_registerd;
        $this->year_end_registration = $year_end_registration;
        $this->quality = $quality;
    }

    public function Display_data(){
        $stmt = $pdo->prepare("SELECT * FROM brand where brand");
        $stmt->execute();

        $sql = "select brand.brandname, ad.price, contact.phone_number, ad.first_registration, ad.distance_driven, engine_type.engine_type, engine_type.gearbox from ad, brand, user, engine_type, contact
            where 
                brand.brandname = ? and
                ad.distance_driven = ? and 
                engine_type.fuel_type = ? and 
                engine_type.gearbox = ? and
                ad.price between ? and ?
            limit 1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$this->$brand, $this->price_from, $this->price_to, $this->Distance_driven, $this->type_of_motor, $this->year_registerd, $this->year_end_registration, $this->quality]);
        print_r($stmt);
    }
}