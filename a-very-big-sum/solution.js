function aVeryBigSum(ar) {
    let sum = 0;
    let i = 0;

    for (i = 0; i < ar.length; i++) {
        sum += ar[i];
    }
    return sum;
}
