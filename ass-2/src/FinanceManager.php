<?php
use Symfony\Component\Console\Command\Command;

    class FinanceManager
    {

        private $dataFile = 'dataStorage.json';
        private $data;

        public function __construct() { 
            if (file_exists($this->dataFile)) {
                $this->data = json_decode(file_get_contents($this->dataFile), true);
            } else {
                $this->data = [
                    'income' => [],
                    'expenses' => [],
                    'categories' => ['income' => [], 'expenses' => []]
                ];
            }
        }

        public function saveData() {
            file_put_contents($this->dataFile, json_encode($this->data, JSON_PRETTY_PRINT));
        }

        public function addIncome($amount, $category, $description) {
            $this->data['income'][] = ['amount' => $amount, 'category' => $category, 'description' => $description];
            if(!in_array($category, $this->data['categories']['income'])){
                $this->data['categories']['income'][] = $category;
            }
            $this->saveData();
            echo "Income added successfully.\n";
        }

        public function addExpense($amount, $category, $description) {
            $this->data['expenses'][] = ['amount' => $amount, 'category' => $category, 'description' => $description];
            if(!in_array($category, $this->data['categories']['expenses'])){
                $this->data['categories']['expenses'][] = $category;
            }
            $this->saveData();
            echo "Expense added successfully.\n";
        }

        public function viewIncome() {  
            $this->viewList('income');
        }

        public function viewExpenses() {
            $this->viewList('expenses');
        }

        private function viewList($type) {
            echo strtoupper($type) . " LIST:\n";
            foreach ($this->data[$type] as $item) {
                echo "Amount: {$item['amount']}, Category: {$item['category']}, Description: {$item['description']}\n";
            }
        }

        public function viewCategories() {
            echo "INCOME CATEGORIES:\n";
            foreach ($this->data['categories']['income'] as $category) {
                echo "- $category\n";
            }
            echo "EXPENSE CATEGORIES:\n";
            foreach ($this->data['categories']['expenses'] as $category) {
                echo "- $category\n";
            }
        }
        public function viewSavings() {
            $totalIncome = array_sum(array_column($this->data['income'], 'amount'));
            $totalExpenses = array_sum(array_column($this->data['expenses'], 'amount'));
            $savings = $totalIncome - $totalExpenses;
            echo "Total Income: $savings\n";
        }

    }


    function showMenu(){
        echo "Welcome to Finance Manager\n";
        echo "1. Add Income\n";
        echo "2. Add Expense\n";
        echo "3. View Income\n";
        echo "4. View Expenses\n";
        echo "5. View Categories\n";
        echo "6. View Savings\n";
        echo "7. Exit\n";   
        echo "Enter your option: ";
    }

    $manager = new FinanceManager();

    while(true){
        showMenu();
        $choice = (int)readline();
        switch($choice){
            case 1:
                echo "Enter income amount: ";
                $amount = (float)readline();
                echo "Enter income category: ";
                $category = readline();
                echo "Enter income description: ";
                $description = readline();
                $manager->addIncome($amount, $category, $description);
                break;
            case 2:
                echo "Enter expense amount: ";
                $amount = (float)readline();
                echo "Enter expense category: ";
                $category = readline();
                echo "Enter expense description: ";
                $description = readline();
                $manager->addExpense($amount, $category, $description);
                break;
            case 3:
                $manager->viewIncome();
                break;
            case 4:
                $manager->viewExpenses();
                break;
            case 5:
                $manager->viewCategories();
                break;
            case 6:
                $manager->viewSavings();
                break;
            case 7:
                exit('Exiting...');
            default:
                echo "Invalid choice. Please try again.\n";
        }
    }

?>