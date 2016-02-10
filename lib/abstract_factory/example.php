<?php

// include common helper functions
include __DIR__ . '/../common/common.php';

// define used classes
use AbstractFactory\AbstractCarFactory;
use AbstractFactory\Chevrolet\ChevroletFactory;
use AbstractFactory\Nissan\NissanFactory;

/**
 * Helper function for creating cars based on a given factory
 *
 * @param AbstractCarFactory $carFactory
 * @return \AbstractFactory\AbstractCar
 */
function createCar(AbstractCarFactory $carFactory)
{
    // create car
    $car = $carFactory->createCar();

    // and all parts
    $body = $carFactory->createBody();

    $engine = $carFactory->createEngine();

    $tierFrontLeft = $carFactory->createTier();
    $tierFrontRight = $carFactory->createTier();
    $tierRearLeft = $carFactory->createTier();
    $tierRearRight = $carFactory->createTier();

    $tank = $carFactory->createTank();

    // then add them to the car
    $car->addEngine($engine);
    $car->addTier($tierFrontLeft);
    $car->addTier($tierFrontRight);
    $car->addTier($tierRearLeft);
    $car->addTier($tierRearRight);
    $car->addTank($tank);
    $car->addBody($body);

    // return created car
    return $car;
}

/**
 * Helper function which executes go() method for each car in $cars array
 * and then outputs current state of tank for each car
 *
 * @param \AbstractFactory\AbstractCar[] $cars
 */
function runCars($cars)
{

    // make cars go
    foreach ($cars as $car) {
        echo $car->go() . PHP_EOL;
    }

    echo '-------------------' . PHP_EOL;

    foreach ($cars as $car) {
        echo $car->getName() . ' currently has ' . $car->getCurrentTankVolume() . ' l in tank' . PHP_EOL;
    }
}

// create two different cars
$chevroletCar = createCar(new ChevroletFactory());
$nissanCar = createCar(new NissanFactory());

// output basic data for each car
echo $chevroletCar;
echo $nissanCar;

// now output some data
echo 'Chevrolet mileage: ' . $chevroletCar->getMileage() . PHP_EOL;
echo 'Nissan mileage: ' . $nissanCar->getMileage() . PHP_EOL;

// refule cars
$chevroletCar->refuelTank(50);
$nissanCar->refuelTank(50);

runCars([$chevroletCar, $nissanCar]);
runCars([$chevroletCar, $nissanCar]);
runCars([$chevroletCar, $nissanCar]);
runCars([$chevroletCar, $nissanCar]);
