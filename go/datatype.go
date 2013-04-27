package main

import "fmt"
import "math"

func main() {
	type User struct {
		name string
		age int
	}

	// var user User
	// user := new(User)
	// user.name = "jimmy"
	// user.age  = 30
	// user := new(User)
	// user := User{"jimmy", 30}
	user := User{name: "jimmy", age: 30}

	arr := [5]int{1, 2}
	arr1 := []int{1, 2, 3}
	arr2 := [...]int{1, 2, 3, 4}
	arr3 := [3]int{}

	slice := arr2[0:4]

	fmt.Println(user, arr, arr1, arr2, arr3)

	fmt.Println(slice, user.name[0:3])

	ages := map[string] int {
		"jim": 20,
		"jimmy": 30,
	}

	ages["ja"] = 10
	// ages["jim"] = 110

	fmt.Println(ages["jimmy"], ages["jim"], ages["ja"], ages["j"])

	// package

	a := math.Abs(-1)
	fmt.Println(a)

	// func

	h, c := myfn(100, 99)

	fmt.Println(h, c)

	for i := 0; i < len(arr2); i++ {
		fmt.Println(arr2[i])
	}

	goto end

	for _, v := range arr3 {
		fmt.Println(v)
	}

	end:

	const x, y, z, x1, y1, z1 = true, 20, 3+1, 'x', "y1", 3 + 2i
	fmt.Println(x, y, z, x1, y1, z1)


}

func myfn(a, b int) (int, int) {
	c := a + b
	// var d int
	d := 0
	if a > b {
		d = a - b
	} else {
		d = b - a
	}

	switch c {
		case 1, 100, 199:
			c = 1
		default:
			c = 0
	}

	return c, d
}